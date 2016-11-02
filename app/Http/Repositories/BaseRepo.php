<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:39
 */

namespace App\Http\Repositories;


use App\Http\Helpers\ImagesHelper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class BaseRepo {

    protected $model;
    protected $image;

    public function __construct(ImagesHelper $imagesHelper)
    {
        $this->model = $this->getModel();
        $this->image = $imagesHelper;
    }

    public abstract function getModel();

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($request)
    {
        $model = new $this->model();
        $model->fill($request->all());
        $model->save();

        //guarda log
        $model->logs()->create(['user_id'=> Auth::user()->id ,'log'=>'Create Record.']);

        //guarda imagenes
        if(isset($request->image))
            if($request->image != '') {
                $time = new DateTime();
                $name = $time.$request->image->getClientOriginalName();

                $this->image->upload( $name , $request->file('image'), $this->getConfig()['imagesPath']);
                $model->images()->create(['path' => $this->getConfig()['imagesPath'] . $name]);
            }

    }

    public function udpate($id,$request)
    {
        $model = $this->model->find($id);
        $model->fill($request->all());
        $model->save();

        //guarda log
        $model->logs()->create(['user_id'=> Auth::user()->id ,'log'=>'Update Record.']);

    }

    public function destroy($id)
    {
        $model = $this->model->find($id);
        $model->delete();

        //guarda log
        $model->logs()->create(['user_id'=> Auth::user()->id ,'log'=>'Deleted Record.']);

        //elimina images
        $model->images()->delete();

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