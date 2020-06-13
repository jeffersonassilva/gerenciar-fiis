<?php

namespace App\Repositories;

use App\Models\Dividendos;

/**
 * Class DividendosRepository
 * @package App\Repositories
 */
class DividendosRepository extends AbstractRepository
{
    protected $fieldSearchable = [
        'id',
        'cd_fii',
        'fii.co_sigla' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Dividendos::class;
    }

    /**
     * @var array
     */
    public $relationships = [
        'fii',
    ];
}
