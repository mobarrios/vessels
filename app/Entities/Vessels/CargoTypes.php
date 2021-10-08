<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class CargoTypes extends Entity
{

    protected $table = 'cargo_types';
    protected $fillable = ['name'];
    protected $section = 'cargo_types';

}
