<?php
namespace App\Http\Repositories\Configs;

use App\Entities\Configs\User;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Hash;

class UsersRepo extends BaseRepo {

    public function getModel(){
        return new User;
    }

    public function getColumnSearch()
    {
        return ['Nombre'=>'name','Apellido'=>'last_name' ,'Email'=>'email'];
    }

    public function udpate($id,$request)
    {
        $model = $this->model->find($id);
        $model->fill($request->all());
        $model->save();

        $model->Roles()->sync([$request->roles_id]);
    }

    public function create($request)
    {
        $this->model->create($request)->roles()->attach($request['roles_id']);

    }


    public function searchByEmail($email, $password)
    {
        return $this->model->where('email',$email)->where('password',$password)->first();
    }

    public function getConfig(){

        return [
            //nombre de la seccion
            'sectionName' => 'Usuarios',

            //routes
            'indexRoute'    => 'configs.users.index',
            'storeRoute'    => 'configs.users.store',
            'createRoute'   => 'configs.users.create',
            'showRoute'     => 'configs.users.show',
            'editRoute'     => 'configs.users.edit',
            'updateRoute'   => 'configs.users.update',
            'destroyRoute'  => 'configs.users.destroy',

            //urls
            'destroyUrl' => 'configs/users/destroy/',

            //views
            'storeView' =>  'configs.users.form',
            'editView'  =>  'configs.users.form',

        ];
    }
}