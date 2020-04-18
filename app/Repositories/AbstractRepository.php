<?php

namespace App\Repositories;

use Exception;

/**
 * Class AbstractRepository
 * @package App\Repositories
 */
abstract class AbstractRepository extends \Prettus\Repository\Eloquent\BaseRepository
{

    public $relationships = [];

    /**
     * Save a new entity in repository
     *
     * @param array $attributes
     *
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     * @throws Exception
     */
    public function create(array $attributes)
    {
        $result = parent::create($attributes);
        $primaryKey = $result->getKeyName();

        return $this->with($this->relationships)->find($result->$primaryKey);
    }

    /**
     * Update a entity in repository by id
     *
     * @param array $attributes
     * @param       $id
     *
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     * @throws Exception
     */
    public function update(array $attributes, $id)
    {
        parent::update($attributes, $id);

        return $this->with($this->relationships)->find($id);
    }

    /**
     * Overriding Delete a entity in repository by id
     *
     * @param $id
     *
     * @return int
     */
    public function delete($id)
    {
        $request = $this->with($this->relationships)->find($id);
        parent::delete($id);

        return $request;
    }

    /**
     * Overriding Load relations
     *
     * @param array|string $relations
     *
     * @return AbstractRepository|\Prettus\Repository\Eloquent\BaseRepository
     */
    public function with($relations)
    {
        return !empty($relations) ? parent::with($relations) : $this;
    }
}
