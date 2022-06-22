<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class ServicesCargo extends Entity
{

    protected $table = 'services_cargo';
    //protected $fillable = ['*'];
    protected $guarded = [];
    protected $section = 'services_cargo';

    public function Sectors(){
        return $this->belongsTo(Sectors::getClass());
    }

    public function CargoTypes()
    {
        return $this->belongsTo(CargoTypes::getClass(), 'cargo_types_id');
    }



}
