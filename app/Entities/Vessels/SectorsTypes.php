<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class SectorsTypes extends Entity
{

    protected $table = 'sectors_types';
    protected $fillable = ['name'];
    protected $section = 'sectors_types';

}
