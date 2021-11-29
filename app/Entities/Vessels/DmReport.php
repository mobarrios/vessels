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
}
