<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;
use Illuminate\Support\Facades\DB;
class Vessels extends Entity
{

    protected $table = 'vessels';
    protected $fillable = ['name','company_id','vessels_types_id', 'class_society', 'class_notation','power','dock_area','bollar_pull','fi_fi','total_berths','pax_seats'];
    protected $section = 'vessels';


    public function Sectors()
    {
        return $this->hasMany(Sectors::class);
    }

    public function getTypesTotalCapcitiesAttribute()
    {
      $sector = DB::table('sectors')
      ->join('sectors_cargo_types','sectors_cargo_types.sectors_id','=','sectors.id')
      ->join('cargo_types','cargo_types.id','=','sectors_cargo_types.cargo_types_id')
      ->select('cargo_types.name', DB::raw('sum(sectors.capacities) as total'))
      ->where('vessels_id',$this->attributes['id'])
      ->groupBy('cargo_types.id')
      ->get();

      return $sector;
    }


}
