<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;



abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $repo;
    protected $route;
    protected $data;
    protected $config;


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        if($request->search)
            $model = $this->repo->search($request);
        else
            $model  = $this->repo->listAll();

        Session::put('export',$model->get());

        $this->data['models'] = $model->paginate($this->paginate);

        return view($this->config->indexRoute)->with($this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view($this->config->storeView)->with($this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->repo->create($request->all());

        return redirect()->route($this->config->indexRoute)->withErrors(['Regitro Agregado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $id = $this->route->getParameter('id');

        $this->data['models'] = $this->repo->find($id);
        return view($this->config->editView)->with($this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $id = $this->route->getParameter('id');

        $this->repo->udpate($id,$request);

        return redirect()->route($this->config->indexRoute)->withErrors(['Regitro Editado Correctamente']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->repo->destroy($id);
    }




}
