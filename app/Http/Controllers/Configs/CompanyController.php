<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\CompanyRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;




class CompanyController extends Controller
{
    protected $usersRepo;

    public function  __construct(Repo $repo, Route $route, Request $request)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
        $this->section          = 'company';
        $this->data['section']  = $this->section;

    }

    
}
