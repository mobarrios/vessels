<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class DepartureReport extends Entity
{

    protected $table = 'departure_report';
    protected $fillable = ['departure_time',
    'cargo_tonnage',
    'docker_area_loaded',
    'garbage_disembark',
    'garbage_arribal',
    'mgo_required',
    'fw_required',
    'pob',
    'pax_inbound',
    'pax_outbound',
    'services_id',
    'locations_id' ];
    //protected $guarded = [];
    protected $section = 'departure_report';

    public function Locations()
    {
        return $this->belongsTo(Locations::getClass());
    }

    public function DepartureReportCargo(){
        return $this->hasMany(DepartureReportCargo::getClass());
    }

}
