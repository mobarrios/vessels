<?php
namespace App\Http\Repositories\Configs;

use App\Entities\Configs\Logs;
use App\Http\Repositories\BaseRepo;

class LogsRepo extends BaseRepo {

    public function getModel()
    {
        return new Logs();
    }


    //----- configs
    public function getColumnSearch(){

        return ['Fecha'=>'created_at','Log'=>'log','Entidad'=>'logeable_type','Usuario'=>'user_id'];
    }


    public function getConfig(){

        return [
            //nombre de la seccion
            'sectionName' => 'Logs',

            //routes
            'indexRoute'    => 'configs.logs.index',
            'storeRoute'    => 'configs.logs.store',
            'createRoute'   => 'configs.logs.create',
            'showRoute'     => 'configs.logs.show',
            'editRoute'     => 'configs.logs.edit',
            'updateRoute'   => 'configs.logs.update',
            'destroyRoute'  => 'configs.logs.destroy',

            //urls
            'destroyUrl' => 'configs/Logs/destroy/',

            //views
            'storeView' =>  'configs.Logs.form',
            'editView'  =>  'configs.Logs.form',

        ];
    }

}