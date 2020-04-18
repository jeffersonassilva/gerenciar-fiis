<?php

namespace App\Http\Controllers;

use App\Http\Requests\FiisRequest;
use App\Models\Fiis;
use App\Services\FiisService;
use Illuminate\Http\Response;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class FiisController
 * @package App\Http\Controllers
 */
class FiisController extends AbstractController
{
    /**
     * FiisController constructor.
     * @param FiisService $fiisService
     */
    public function __construct(FiisService $fiisService)
    {
        $this->service = $fiisService;
        $this->model = Fiis::class;
    }

    /**
     * @param FiisRequest $request
     * @return mixed
     * @throws ValidatorException
     */
    public function store(FiisRequest $request)
    {
        $data = $this->service->store($request);
        return Response::custom('messages.created', $data, 201);
    }

    /**
     * @param FiisRequest $request
     * @param $id
     * @return mixed
     */
    public function update(FiisRequest $request, $id)
    {
        return parent::updateAs($request, $id);
    }
}
