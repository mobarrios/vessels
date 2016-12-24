<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Configs\Brancheables;
use App\Entities\Moto\Certificates;
use App\Entities\Moto\Items;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Auth;


class ItemsRepo extends BaseRepo {

    protected $itemsRequestRepo;

    public function __construct(ItemsRequestRepo $itemsRequestRepo)
    {
        $this->itemsRequestRepo =  $itemsRequestRepo;

        parent::__construct();
    }

    public function getModel()
    {
        return new Items();
    }


    public function ItemsByModels($id)
    {
        $data = $this->model->with('Branches')->where('models_id',$id)->get();
        return $data;
    }

    public function asignItem($models_id, $branches_id, $sales_id = null)
    {

        //busca items con estatus ingresado
        $items = Items::where('status',1)->where('models_id', $models_id)->get()->lists('id');

        // valida si el producto esta en la sucursal de destino
        $qBranch = Brancheables::where('entities_type', 'App\Entities\Moto\Items')->whereIn('entities_id', $items)->where('branches_id',$branches_id)->first();

        if(!is_null($qBranch))
        {
            $item =   $qBranch;

        }else{

            // si no esta en la sucursal de destino envia la mas antigua
            $item =  Brancheables::where('entities_type', 'App\Entities\Moto\Items')->whereIn('entities_id', $items)->first();

            //pide a logistica el envio del item sucA a sucB
            $this->itemsRequest($item->entities_id, $item->branches_id, $branches_id , $sales_id);
        }

        // cambia el estado a reservado
        $this->changeStatus($item->entities_id , 2);

        return $item->entities_id;
    }



    public function itemsRequest( $items_id , $branches_id_from , $branches_id_to, $sales_id = null )
    {
        $data = ['items_id'=> $items_id, 'branches_from_id' => $branches_id_from, 'branches_to_id'=> $branches_id_to , 'status'=> 1 , 'sales_id' => $sales_id];

        $this->itemsRequestRepo->create($data);
    }

    public function changeStatus($id ,  $status )
    {
        $item = $this->find($id);
        $item->status =  $status;
        $item->save();

    }
    
}