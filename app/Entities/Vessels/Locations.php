<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class Locations extends Entity
{

    protected $table = 'locations';
    protected $fillable = ['name'];
    protected $section = 'locations';

}
