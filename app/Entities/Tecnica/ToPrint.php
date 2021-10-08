<?php
namespace App\Entities\Tecnica;

use App\Entities\Tecnica\ToPrint;
use App\Entities\Entity;

class ToPrint extends Entity
{

    protected $table = 'print';
    protected $fillable = ['descripcion'];
    protected $section = 'states';

    
}


