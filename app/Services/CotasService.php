<?php

namespace App\Services;

use App\Criteria\OrderByDtCompraCriteria;
use App\Repositories\CotasRepository;

/**
 * Class CotasService
 * @package App\Services
 */
class CotasService extends AbstractService
{
    /**
     * @var CotasRepository
     */
    protected $repository;

    /**
     * CotasService constructor.
     * @param CotasRepository $repository
     */
    public function __construct(CotasRepository $repository)
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
        $this->repository->pushCriteria(app(OrderByDtCompraCriteria::class));
        $data = $this->repository->with($this->repository->relationships);

        return request()->pagination == 'false' ? $data->all() : $data->paginate();
    }
}
