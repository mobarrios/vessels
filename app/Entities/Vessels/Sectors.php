<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class Sectors extends Entity
{
    protected $table    = 'sectors';
    protected $fillable = ['name','capacities','um', 'vessels_id', 'sectors_types_id'];
    protected $section  = 'sectors';


    public function Vessels()
    {
      return $this->belongsTo(Vessels::class);
    }

    public function SectorsTypes()
    {
        return $this->belongsTo(SectorsTypes::class);
    }

    public function CargoTypes()
    {
        return $this->belongsToMany(CargoTypes::getClass(), 'sectors_cargo_types','sectors_id','cargo_types_id');
    }

    public function getSectorCargoTypesIdAttribute()
    {
        return $this->CargoTypes->lists('id')->toArray();
    }

    public function getUmAttribute()
    {
      return config('status.um.'.$this->attributes['um']);
    }
}
