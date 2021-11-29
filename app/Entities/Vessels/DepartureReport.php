<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class DepartureREport extends Entity
{

    protected $table = 'departure_report';
    //protected $fillable = ['*'];
    protected $guarded = [];
    protected $section = 'departure_report';

    public function Locations(){
        return $this->belongsTo(Locations::getClass());

    }

}
