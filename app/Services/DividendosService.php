<?php

namespace App\Services;

use App\Criteria\OrderByDtPagamentoCriteria;
use App\Repositories\DividendosRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class DividendosService
 * @package App\Services
 */
class DividendosService extends AbstractService
{
    /**
     * @var DividendosRepository
     */
    protected $repository;

    /**
     * DividendosService constructor.
     * @param DividendosRepository $repository
     */
    public function __construct(DividendosRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function all()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $this->repository->pushCriteria(app(OrderByDtPagamentoCriteria::class));
        $data = $this->repository->with($this->repository->relationships);

        return request()->pagination == 'false' ? $data->all() : $data->paginate();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function recebiveis()
    {
        return DB::table('dividendos')
            ->select('fiis.co_sigla', 'fiis.id as cd_fii', 'dividendos.id AS id_pagamento',
                DB::raw('DATE_FORMAT(dividendos.dt_pagamento, "%d/%m/%Y") AS dt_pagamento'),
                DB::raw("(
                    SELECT sum(cotas.nr_cotas)
                    FROM cotas
                    WHERE cotas.cd_fii = dividendos.cd_fii
                    AND cotas.dt_compra <= dividendos.dt_fechamento
                    ) AS nr_cotas"
                ),
                DB::raw("(
                    SELECT format(sum(cotas.nr_cotas) * dividendos.vl_dividendo, 2, 'de_DE')
                    FROM cotas
                    WHERE cotas.cd_fii = dividendos.cd_fii
                    AND cotas.dt_compra <= dividendos.dt_fechamento
                    ) AS vl_recebido"
                )
            )
            ->join('fiis', 'fiis.id', '=', 'dividendos.cd_fii')
            ->leftJoin('rendimentos as rendimentos', function ($join) {
                $join->on(['rendimentos.cd_fii' => 'fiis.id', 'rendimentos.dt_pagamento' => 'dividendos.dt_pagamento']);
            })
            ->whereNull('rendimentos.id')
            ->having('nr_cotas', '>', 0)
            ->orderBy('dividendos.dt_pagamento', 'asc')
            ->get();
    }
}
