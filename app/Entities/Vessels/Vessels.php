<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class Vessels extends Entity
{

    protected $table = 'vessels';
    protected $fillable = ['name','company_id','vessels_types_id', 'class_society', 'class_notation','power','dock_area','bollar_pull','fi_fi','total_berths','pax_seats'];
    protected $section = 'vessels';





}
