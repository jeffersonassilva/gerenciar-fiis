<?php

namespace App\Services;

use Illuminate\Http\Request;

/**
 * Class AbstractService
 * @package App\Service
 */
abstract class AbstractService
{
    /**
     * @var \App\Repositories\AbstractRepository
     */
    protected $repository;

    /**
     * Returns a paginated list of Model.
     *
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function all()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $data = $this->repository->with($this->repository->relationships);

        return request()->pagination == 'false' ? $data->all() : $data->paginate();
    }

    /**
     * Data of a Model by primary key
     *
     * @param int|string $id
     *
     * @return mixed
     * @throws \Exception
     */
    public function find($id)
    {
        return $this->repository->with($this->repository->relationships)->find($id);
    }

    /**
     * Store a newly created Model in storage.
     *
     * @param Request $request
     *
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }

    /**
     * Update the specified Model in storage.
     *
     * @param Request $request
     * @param int|string $id
     *
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        return $this->repository->update($request->all(), $id);
    }

    /**
     * Remove the specified Model from storage.
     *
     * @param int|string $id
     *
     * @return null
     * @throws \Exception
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
