<?php
namespace App\Http\Repositories\Configs;

use App\Entities\Configs\Branches;
use App\Entities\Configs\User;
use App\Http\Repositories\BaseRepo;
use Illuminate\Http\Request;


class BranchesRepo extends BaseRepo {

    protected $is_brancheable   =  false;
    protected $is_imageable     =  true;
    protected $is_logueable     =  true;

    public function getModel()
    {
        return new Branches();
    }
    

}