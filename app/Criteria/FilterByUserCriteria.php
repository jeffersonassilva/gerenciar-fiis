<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class FilterByUserCriteria
 * @package App\Criteria
 */
class FilterByUserCriteria extends RequestCriteria implements CriteriaInterface
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model $model
     * @param RepositoryInterface $repository
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $userId = request()->header('User-Id');
        return $userId ? $model->where('cd_usuario', '=', $userId) : $model;
    }
}
