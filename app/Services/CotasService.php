<?php

namespace App\Services;

use App\Repositories\CotasRepository;

/**
 * Class CotasService
 * @package App\Service
 */
class CotasService extends AbstractService
{
    /**
     * @var CotasRepository
     */
    protected $repository;

    /**
     * TituloNoticiaService constructor.
     * @param CotasRepository $repository
     */
    public function __construct(CotasRepository $repository)
    {
        $this->repository = $repository;
    }
}
