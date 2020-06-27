<?php

namespace App\Services;

use App\Repositories\RendimentosRepository;

/**
 * Class RendimentosService
 * @package App\Services
 */
class RendimentosService extends AbstractService
{
    /**
     * @var RendimentosRepository
     */
    protected $repository;

    /**
     * RecebimentosService constructor.
     * @param RendimentosRepository $repository
     */
    public function __construct(RendimentosRepository $repository)
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
        $data = $this->repository->with($this->repository->relationships);

        return request()->pagination == 'false' ? $data->all() : $data->paginate();
    }
}
