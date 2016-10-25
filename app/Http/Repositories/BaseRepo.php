<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:39
 */

namespace App\Http\Repositories;


use Illuminate\Http\Request;

abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($request)
    {
        $model = new $this->model();
        $model->fill($request);
        $model->save();
        
    }

    public function udpate($id,$request)
    {
        $model = $this->model->find($id);
        $model->fill($request->all());
        $model->save();
    }

    public function destroy($id)
    {
        $this->model->find($id)->delete();
    }

    public function ListAll()
    {
       return $this->model;
    }



    // search
    public function search($request){


        //get column to search in model repo
        //$columns = $this->getColumnSearch();
        $columns = $request->filter;

        $q = $this->model->where('id','like','%'.$request->search.'%');

            foreach ($columns as $column => $k){

                if(is_array($k)){

                    foreach ($k as $relation => $col){

                        $q->orWhereHas($relation, function($q) use ($col , $request){
                            $q->where($col ,'like','%'.$request->search.'%');
                        });
                    }
                } else {

                    $q->orWhere($k ,'like','%'.$request->search.'%');
                }
            }
        
        //no hago get pq lo hace en el controller para paginar
        return $q;
    }



}