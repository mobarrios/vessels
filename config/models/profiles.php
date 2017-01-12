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
        '0' => 'avatar-1',
        '1' => 'avatar-2',
        '2' => 'avatar-3',
        '3' => 'avatar-4',
        '4' => 'avatar-5',
        '5' => 'avatar-6',
        '6' => 'avatar-7',
        '7' => 'avatar-8',
        '8' => 'avatar-9',
        '9' => 'avatar-10',
        '10' => 'avatar-11',
        '11' => 'avatar-12'
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
//            'password_old'     => 'exist:password',
//            'password'     => 'required_if:password_old,'.Auth::user()->password
    ],

];
