<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $repo;
    protected $route;
    protected $data;

    public function getIndex(Request $request){

        if($request->search)
            $model = $this->repo->search($request->search);
        else
            $model  = $this->repo->listAll();


        $this->data['models'] = $model->paginate($this->paginate);

        return view($this->indexRoute)->with($this->data);
    }


}
