<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;
use App\Entities\Configs\User;

class Operations extends Entity
{

    protected $table = 'operations';
    protected $fillable = ['start_date','end_date','quantity', 'status', 'services_id','sectors_id','users_id','cargo_types_id','locations_id','operations_types_id'];
    protected $section = 'operations';


    public function Sectors()
    {
        return $this->belongsTo(Sectors::class);
    }
    public function Locations()
    {
        return $this->belongsTo(Locations::class);
    }

    public function OperationsTypes()
    {
        return $this->belongsTo(OperationsTypes::class);
    }


    public function CargoTypes()
    {
        return $this->belongsTo(CargoTypes::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function Services()
    {
        return $this->belongsTo(Services::class, 'services_id');
    }

    public function getDurationAttribute()
    {
      $start = \Carbon\Carbon::parse($this->attributes['start_date']) ;
      $end = \Carbon\Carbon::parse($this->attributes['end_date']) ;
      $totalDuration = $start->diff($end)->format('%H:%I:%S');

      return $totalDuration;
    }
}
