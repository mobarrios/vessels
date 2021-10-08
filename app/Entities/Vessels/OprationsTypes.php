<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class OperationsTypes extends Entity
{

    protected $table = 'operations_types';
    protected $fillable = ['name'];
    protected $section = 'operations_types';

}
