<?php

namespace App\Repositories;

use App\Models\Cotas;

/**
 * Class CotasRepository
 * @package App\Repositories
 */
class CotasRepository extends AbstractRepository
{
    protected $fieldSearchable = [
        'id',
        'cd_fii',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cotas::class;
    }

    /**
     * @var array
     */
    public $relationships = [
        'fii',
    ];
}
