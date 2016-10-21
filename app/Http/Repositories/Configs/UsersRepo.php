<?php
namespace App\Http\Repositories\Configs;

use App\Entities\Configs\User;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Hash;

class UsersRepo extends BaseRepo {

    public function getModel(){
        return new User;
    }

    public function getColumnSearch(){
        return ['Nombre'=>'name','Email'=>'email'];
    }

    public function searchByEmail($email, $password){
        return $this->model->where('email',$email)->where('password',$password)->first();
    }
}