<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Orders;
use App\Http\Repositories\BaseRepo;


class OrdersRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Orders();
    }

    // search
    public function search($data)
    {

        //get column to search in model repo
        //$columns = $this->getColumnSearch();
        $columns = $data->filter;


        $q = $this->model->where('id', 'like', '%' . $data->search . '%')->orWhereHas('Cliente',function($q) use ($data){
            $q->where('last_name','like','%'.$data->search.'%');
        });

        // foreach ($columns as $column => $k) {
        //     $ex = explode(',', $k);

        //     if (isset($ex[1])) {
        //         if ($ex[0] == "branches") {
        //             $q->orWhereHas('Brancheables', function ($r) use ($ex, $data) {
        //                 $r->whereHas('Branches', function ($b) use ($ex, $data) {
        //                     $b->where($ex[1], 'like', '%' . $data->search . '%');
        //                 });
        //             });


        //         } else {

        //             $q->orWhereHas($ex[0], function ($q) use ($ex, $data) {
        //                 $q->where($ex[1], 'like', '%' . $data->search . '%');
        //             });
        //         }
        //     } else {

        //         $q->orWhere($ex[0], 'like', '%' . $data->search . '%');

        //     }
        return $q;
    
    }
}
