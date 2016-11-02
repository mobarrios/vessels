<?php
namespace App\Http\Repositories\Configs;

use App\Entities\Configs\User;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\BaseRepo;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Auth;
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
        
        $model->logs()->create(['user_id'=> Auth::user()->id ,'log'=>'Updated Record.']);

        if(isset($request->image))
            if($request->image != '') {
                $this->image->upload($request->image->getClientOriginalName(), $request->file('image'), $this->getConfig()['imagesPath']);

                $model->images();
                $model->images()->create(['path' => $this->getConfig()['imagesPath'] . $request->image->getClientOriginalName()]);
            }

    }

    public function create($request)
    {

        $model = new $this->model();
        $model->fill($request->all());
        $model->save();

        $model->roles()->attach($request['roles_id']);
        $model->logs()->create(['user_id'=> Auth::user()->id ,'log'=>'Create Record.']);


        if(isset($request->image))
            if($request->image != '') {
                $time = new DateTime();
                $name = $time.$request->image->getClientOriginalName();

                $this->image->upload($name, $request->file('image'), $this->getConfig()['imagesPath']);
                $model->images()->create(['path' => $this->getConfig()['imagesPath'] . $request->image->getClientOriginalName()]);
            }
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

            //images
            'imagesPath' =>  'uploads/users/img/',


        ];
    }
}