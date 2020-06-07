<?php

namespace App\Repositories;

use App\Models\Fiis;

/**
 * Class FiisRepository
 * @package App\Repositories
 */
class FiisRepository extends AbstractRepository
{
    protected $fieldSearchable = [
        'id',
        'co_sigla' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Fiis::class;
    }
}
