<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class Services extends Entity
{

    protected $table = 'services';
    protected $fillable = ['start_date','end_date','origin', 'destiny', 'sap','movilisation_cost','status','vessels_id'];
    protected $section = 'services';



        public function Vessels(){
        	return $this->belongsTo(Vessels::getClass());
        }



}
