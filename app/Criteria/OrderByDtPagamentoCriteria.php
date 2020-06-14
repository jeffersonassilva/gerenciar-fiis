<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class OrderByDtPagamentoCriteria
 * @package App\Criteria
 */
class OrderByDtPagamentoCriteria extends RequestCriteria implements CriteriaInterface
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model $model
     * @param RepositoryInterface $repository
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->orderBy('dt_pagamento', 'DESC');
    }
}
