<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class VesselsTypes extends Entity
{

    protected $table = 'vessels_types';
    protected $fillable = ['name'];
    protected $section = 'vessels_types';

}
