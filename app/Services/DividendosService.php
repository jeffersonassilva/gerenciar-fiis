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
            ->select('fiis.co_sigla', 'fiis.id', 'dividendos.dt_pagamento', (
                DB::raw("(
                    SELECT sum(cotas.nr_cotas)
                    FROM cotas
                    WHERE cotas.cd_fii = dividendos.cd_fii
                    AND cotas.dt_compra <= dividendos.dt_fechamento
                    ) AS nr_cotas")
            ), DB::raw("(
                    SELECT sum(cotas.nr_cotas) * dividendos.vl_dividendo
                    FROM cotas
                    WHERE cotas.cd_fii = dividendos.cd_fii
                    AND cotas.dt_compra <= dividendos.dt_fechamento
                    ) AS vl_recebido")
            )
            ->join('fiis', 'fiis.id', '=', 'dividendos.cd_fii')
            ->orderBy('dividendos.dt_pagamento', 'asc')
            ->get();
    }
}
