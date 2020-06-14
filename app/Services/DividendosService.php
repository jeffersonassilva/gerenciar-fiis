<?php

namespace App\Services;

use App\Criteria\OrderByDtPagamentoCriteria;
use App\Repositories\DividendosRepository;

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
}
