<?php

namespace App\Services;

use App\Repositories\FiisRepository;

/**
 * Class FiisService
 * @package App\Service
 */
class FiisService extends AbstractService
{
    /**
     * @var FiisRepository
     */
    protected $repository;

    /**
     * TituloNoticiaService constructor.
     * @param FiisRepository $repository
     */
    public function __construct(FiisRepository $repository)
    {
        $this->repository = $repository;
    }
}
