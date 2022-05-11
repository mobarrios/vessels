<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class DmReport extends Entity
{

    protected $table = 'dm_report';
    //protected $fillable = ['*'];
    protected $guarded = [];
    protected $section = 'dm_report';

    public function Locations(){
        return $this->belongsTo(Locations::getClass());
    }

    public function Services(){
      return $this->belongsTo(Services::getClass());
    }

    public function DmrCargo()
    {
      return $this->hasMany(DmrCargo::getClass());
    }

    public function cargoByType($cargoTypesId)
    {

      $data =  \DB::table('dm_report')
      ->join('dmr_cargo','dmr_cargo.dm_report_id','=','dm_report.id')
      ->join('services_cargo','services_cargo.id','=','dmr_cargo.services_cargo_id')
      ->where('dm_report.id',$this->attributes['id'])
      ->where('services_cargo.cargo_types_id','=',$cargoTypesId)

      //->where('operations.cargo_types_id',$cargoTypesId)
      // ->select('cargo_types_id',\DB::raw('SUM(case when operations.operations_types_id in (29,27,26) then operations.quantity else 0 end) as sum'),
      // \DB::raw('SUM(case when operations.operations_types_id in (2,3,28) then operations.quantity else 0 end) as res'))
      // ->groupBy('operations.cargo_types_id')
      ->get();


      return $data;
    }
}
