<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:39
 */

namespace App\Http\Repositories;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Logs;
use Illuminate\Support\Facades\Auth;

abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function create($data)
    {
        $model = new $this->model();
        $model->fill($data->all());
        $model->save();

        return $model;
    }


    public function update($id,$data)
    {
        $model = $this->model->find($id);
        $model->fill($data->all());
        $model->save();

        return $model;
    }


    public function destroy($id)
    {
        $model = $this->model->find($id);

        $model->delete();
        
        return $model;
    }


    public function ListAll()
    {
       return $this->model;
    }

    public function ListsData($data, $id)
    {
        return $this->model->lists($data, $id)->prepend('Seleccionar...','');
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }


    // search
    public function search($data)
    {
        //get column to search in model repo
        //$columns = $this->getColumnSearch();
        $columns = $data->filter;

        $q = $this->model->where('id','like','%'.$data->search.'%');

            foreach ($columns as $column => $k){

                if(is_array($k)){

                    foreach ($k as $relation => $col){

                        $q->orWhereHas($relation, function($q) use ($col , $data){
                            $q->where($col ,'like','%'.$data->search.'%');
                        });
                    }
                } else {

                    $q->orWhere($k ,'like','%'.$data->search.'%');
                }
            }
        
        //no hago get pq lo hace en el controller para paginar
        return $q;
    }


    public function createLog($model , $log)
    {
        $logData = config('logs.'.$log);
        $model->logs()->create(['user_id'=> Auth::user()->id, 'log'=> $logData]);
    }


    public function createBrancheables( $model , $branches_id)
    {
        $model->brancheables()->delete();
        $model->brancheables()->create(['branches_id' => $branches_id] );
    }


    public function createImageables( $model , $image)
    {
        $model->images()->delete();
        $model->images()->create(['path' => $image]);
    }

}