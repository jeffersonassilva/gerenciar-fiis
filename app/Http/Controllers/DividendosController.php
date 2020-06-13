<?php

namespace App\Http\Controllers;

use App\Http\Requests\DividendosRequest;
use App\Models\Dividendos;
use App\Services\DividendosService;
use Illuminate\Http\Response;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class DividendosController
 * @package App\Http\Controllers
 */
class DividendosController extends AbstractController
{
    /**
     * DividendosController constructor.
     * @param DividendosService $dividendosService
     */
    public function __construct(DividendosService $dividendosService)
    {
        $this->service = $dividendosService;
        $this->model = Dividendos::class;
    }

    /**
     * @param DividendosRequest $request
     * @return mixed
     * @throws ValidatorException
     */
    public function store(DividendosRequest $request)
    {
        $data = $this->service->store($request);
        return Response::custom('messages.created', $data, 201);
    }

    /**
     * @param DividendosRequest $request
     * @param $id
     * @return mixed
     */
    public function update(DividendosRequest $request, $id)
    {
        return parent::updateAs($request, $id);
    }
}
