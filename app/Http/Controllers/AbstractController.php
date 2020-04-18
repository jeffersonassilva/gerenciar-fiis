<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class AbstractController
 * @package App\Http\Controllers
 */
class AbstractController extends Controller
{
    /**
     * @var $service
     */
    protected $service;

    /**
     * @var $model
     */
    protected $model;

    /**
     * Display a listing of the resource.
     * @return mixed
     */
    public function index()
    {
        $data = $this->service->all(true);
        return Response::custom('messages.list', $data);
    }

    /**
     * Display the specified resource.
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $data = $this->service->find($id);
        return Response::custom('messages.detail', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return mixed
     */
    public function save(Request $request)
    {
        $data = $this->service->store($request);
        return Response::custom('messages.created', $data, 201);
    }

    /**
     * Update the specified resource in storage.
     * @param $request
     * @param $id
     * @return mixed
     */
    public function updateAs($request, $id)
    {
        $data = $this->service->update($request, $id);
        return Response::custom('messages.updated', $data, 202);
    }

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->service->delete($id);
        return Response::custom('messages.deleted');
    }
}
