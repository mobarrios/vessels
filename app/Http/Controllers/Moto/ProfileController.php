<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Configs\RolesRepo;
use App\Http\Repositories\Configs\UsersRepo as Repo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function  __construct(Repo $repo, Route $route , RolesRepo $rolesRepo , Request $request, BranchesRepo $branchesRepo)
    {

        $this->request      = $request;
        $this->repo         = $repo;
        $this->route        = $route;
        $this->rolesRepo    = $rolesRepo;
        $this->section      = 'profiles';

        //data select
        $this->data['roles']    = $rolesRepo->listsData('name','id');
        $this->data['branches'] = $branchesRepo->listsData('name', 'id');

        $this->data['section'] = $this->section;

    }

    public function index()
    {
        //breadcrumb activo
        $this->data['activeBread'] = 'Perfil';

        $this->data['model'] = Auth::user();

        $this->data['avatares'] = config('models.'.$this->section.'.avatares');

        return view(config('models.'.$this->section.'.indexRoute'))->with($this->data);
    }

}
