<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\UsersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Collection as Collection;

class UsersController extends Controller
{
    public function  __construct(UsersRepo $repo, Route $route){

        $this->repo     = $repo;
        $this->route    = $route;

        $this->config = (object)$repo->getConfig();
        $this->data['routes'] = $this->config;

        //filter options
        $this->data['filters']       = $this->repo->getColumnSearch();

        //data paginate
        $this->paginate = 50;
    }


    public function update(Request $request)
    {
        $id = $this->route->getParameter('id');
        
        if(empty($request->password))
            $request->offsetUnset('password');
        else
            $request['password'] = Hash::make($request->password);

        $this->repo->udpate($id,$request);

        return redirect()->route($this->config->indexRoute)->withErrors(['Regitro Editado Correctamente']);

    }
    
}
