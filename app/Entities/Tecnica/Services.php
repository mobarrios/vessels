<?php
namespace App\Entities\Tecnica;

use App\Entities\Tecnica\Services;
use App\Entities\Entity;

class Services extends Entity
{

    protected $table = 'services';
    protected $fillable = ['description', 'amount','iva'];
    protected $section = 'services';

}


