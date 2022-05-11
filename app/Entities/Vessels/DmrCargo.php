<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class DmrCargo extends Entity
{

    protected $table = 'dmr_cargo';
    //protected $fillable = ['*'];
    protected $guarded = [];
    protected $section = 'dmr_cargo';


    public function ServicesCargo(){
      return $this->belongsTo(ServicesCargo::getClass());
    }

    public function DmReport(){
      return $this->belongsTo(DmReport::getClass());
    }


}
