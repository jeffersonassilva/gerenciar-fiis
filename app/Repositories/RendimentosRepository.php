<?php

namespace App\Repositories;

use App\Models\Rendimentos;

/**
 * Class RendimentosRepository
 * @package App\Repositories
 */
class RendimentosRepository extends AbstractRepository
{
    protected $fieldSearchable = [
        'id',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Rendimentos::class;
    }

    /**
     * @var array
     */
    public $relationships = [
        'fii',
    ];
}
