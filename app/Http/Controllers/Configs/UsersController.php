<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\UsersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class UsersController extends Controller
{

    public function  __construct(UsersRepo $repo, Route $route){

        $this->repo     = $repo;
        $this->route    = $route;
        $this->data['searchRoute'] = 'configs.users';
        $this->data['section']     = 'Usuarios';

        $this->indexRoute =  'configs.users.index';
        $this->paginate = 50;
    }


    
    
}
