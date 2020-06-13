<?php

namespace App\Services;

use App\Repositories\DividendosRepository;

/**
 * Class DividendosService
 * @package App\Services
 */
class DividendosService extends AbstractService
{
    /**
     * @var DividendosRepository
     */
    protected $repository;

    /**
     * DividendosService constructor.
     * @param DividendosRepository $repository
     */
    public function __construct(DividendosRepository $repository)
    {
        $this->repository = $repository;
    }
}
