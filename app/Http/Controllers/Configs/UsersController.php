<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Configs\RolesRepo;
use App\Http\Repositories\Configs\UsersRepo as Repo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function  __construct(Repo $repo, Route $route , RolesRepo $rolesRepo , Request $request, BranchesRepo $branchesRepo)
    {

        $this->request      = $request;
        $this->repo         = $repo;
        $this->route        = $route;
        $this->rolesRepo    = $rolesRepo;
        $this->section      = 'users';

        //data select
        $this->data['roles']    = $rolesRepo->listsData('name','id');
        $this->data['branches'] = $branchesRepo->listsData('name', 'id');

        $this->data['section'] = $this->section;

    }


    public function changeBranchesActive()
    {
        $user = $this->repo->find(Auth::user()->id);
        $user->branches_active_id = $this->route->getParameter('branches_id');
        $user->save();

        return redirect()->back()->withErrors(['Sucursal Cambiada Correctamente.']);
    }
}
