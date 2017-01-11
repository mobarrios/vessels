<?php
use Illuminate\Support\Facades\Auth;

$model = 'profiles';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Perfil',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.index',
    'postUpdateRoute' => 'moto.'.$model.'.index',

    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.'.$model.'.form',
    'editView'  =>  'moto.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/users/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => true,
    'is_brancheable'    => false,

    'avatares' => [
        '1' => 'avatar-1',
        '2' => 'avatar-2',
        '3' => 'avatar-3',
        '4' => 'avatar-4',
        '5' => 'avatar-5',
        '6' => 'avatar-6',
        '7' => 'avatar-7',
        '8' => 'avatar-8',
        '9' => 'avatar-9',
        '10' => 'avatar-10',
        '11' => 'avatar-11',
        '12' => 'avatar-12'
    ],

    //column search
    
    'search' => [
        
            'Nombre'    => 'name',
            'Apellido'  => 'last_name' ,
            'Email'     => 'email'
    ],

    'validationsStore' => [

            'email'         => 'required|unique:users,email|email',
            'name'          => 'required',
            'last_name'     => 'required',
            'password'      => 'required',
            'roles_id'      => 'required',
            'branches_id'   => 'required',
    ],

    'validationsUpdate' => [

            'name'          => 'required',
            'last_name'     => 'required',
            'email'     => 'required',
            'password_old'     => 'exist:password',
//            'password'     => 'required_if:password_old,'.Auth::user()->password
    ],

];
