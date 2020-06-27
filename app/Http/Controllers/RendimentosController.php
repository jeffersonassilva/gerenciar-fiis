<?php

namespace App\Http\Controllers;

use App\Http\Requests\RendimentosRequest;
use App\Models\Rendimentos;
use App\Services\DividendosService;
use App\Services\RendimentosService;
use Illuminate\Http\Response;

/**
 * Class RendimentosController
 * @package App\Http\Controllers
 */
class RendimentosController extends AbstractController
{
    /**
     * @var RendimentosService
     */
    protected $service;

    /**
     * @var DividendosService
     */
    protected $dividendoService;

    /**
     * RendimentosController constructor.
     * @param RendimentosService $service
     * @param DividendosService $dividendosService
     */
    public function __construct(RendimentosService $service, DividendosService $dividendosService)
    {
        $this->service = $service;
        $this->dividendoService = $dividendosService;
        $this->model = Rendimentos::class;
    }

    /**
     * @param RendimentosRequest $request
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(RendimentosRequest $request)
    {
        $data = $this->service->store($request);
        return Response::custom('messages.created', $data, 201);
    }

    /**
     * @param RendimentosRequest $request
     * @param $id
     * @return mixed
     */
    public function update(RendimentosRequest $request, $id)
    {
        return parent::updateAs($request, $id);
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
