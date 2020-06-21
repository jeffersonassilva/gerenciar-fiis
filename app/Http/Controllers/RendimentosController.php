<?php

namespace App\Http\Controllers;

use App\Models\Dividendos;
use App\Services\DividendosService;
use Illuminate\Http\Response;

/**
 * Class RendimentosController
 * @package App\Http\Controllers
 */
class RendimentosController extends AbstractController
{
    /**
     * @var DividendosService
     */
    protected $dividendoService;

    /**
     * RendimentosController constructor.
     * @param DividendosService $dividendosService
     */
    public function __construct(DividendosService $dividendosService)
    {
        $this->dividendoService = $dividendosService;
        $this->model = Dividendos::class;
    }

    /**
     * @return mixed
     */
    public function recebiveis()
    {
        $data = $this->dividendoService->recebiveis();
        return Response::custom('messages.list', $data);
    }
}
