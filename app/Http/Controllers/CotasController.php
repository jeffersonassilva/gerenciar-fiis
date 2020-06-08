<?php

namespace App\Http\Controllers;

use App\Http\Requests\CotasRequest;
use App\Models\Cotas;
use App\Services\CotasService;
use Illuminate\Http\Response;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class CotasController
 * @package App\Http\Controllers
 */
class CotasController extends AbstractController
{
    /**
     * CotasController constructor.
     * @param CotasService $cotasService
     */
    public function __construct(CotasService $cotasService)
    {
        $this->service = $cotasService;
        $this->model = Cotas::class;
    }

    /**
     * @param CotasRequest $request
     * @return mixed
     * @throws ValidatorException
     */
    public function store(CotasRequest $request)
    {
        $data = $this->service->store($request);
        return Response::custom('messages.created', $data, 201);
    }

    /**
     * @param CotasRequest $request
     * @param $id
     * @return mixed
     */
    public function update(CotasRequest $request, $id)
    {
        return parent::updateAs($request, $id);
    }
}
