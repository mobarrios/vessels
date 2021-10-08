<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\ToPrint;
use App\Http\Repositories\BaseRepo;
class ToPrintRepo extends BaseRepo {
    
    public function getModel()
    {
        return new ToPrint();
    }

}
