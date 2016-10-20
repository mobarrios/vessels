<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:39
 */

namespace App\Http\Repositories;


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

    public function create($datos)
    {

        //return $this->model->create($datos->request->all());

        $model = new $this->model();
        $model->fill($datos->all());
        $model->save();

        //$this->createCustom($datos);

        return $model;

    }

    public function edit($id, $datos)
    {

        $model = $this->model->find($id);
        $model->fill($datos->all());
        $model->save();
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();
    }

    public function ListAll()
    {
        $qry = $this->model->get();
        return $qry;
    }

    public function search($textSearch){

        $columns = $this->getColumnSearch();

        $q = $this->model->where('id','like','%'.$textSearch.'%');

        foreach ($columns as $column){

            if(is_array($column))
                foreach ($column as $relation => $col){

                    $q->orWhereHas($relation, function($q) use ($col , $textSearch){
                        $q->where($col ,'like','%'.$textSearch.'%');
                    });
                }
            else
                $q->orWhere($column ,'like','%'.$textSearch.'%');
        }

        return $q;
    }



}