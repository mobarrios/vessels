<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BanksRepo;
use App\Http\Repositories\Moto\CheckbooksRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class CheckbooksController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, BanksRepo $banksRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'checkbooks';
        $this->data['section']  = $this->section;

        // data
        $this->data['banks'] = $banksRepo->ListsData('name','id');
        $this->data['types'] = config('models.'.$this->section.'.types');



    }
}
