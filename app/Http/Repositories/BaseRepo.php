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

        return $model;
    }

    public function edit($id, Request $request)
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
    public function search($textSearch){

        //get column to search in model repo
        $columns = $this->getColumnSearch();

        $q = $this->model->where('id','like','%'.$textSearch.'%');

        foreach ($columns as $column){

            if(is_array($column))
                foreach ($column as $relation => $col){

                    $q->orWhereHas($relation, function($q) use ($col , $textSearch){
                        $q->where($col ,'like','%'.$textSearch.'%');
                    });
                }
            else{
                $q->orWhere($column ,'like','%'.$textSearch.'%');
            }
        }

        //no hago get pq lo hace en el controller para paginar
        return $q;
    }



}