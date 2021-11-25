<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class DepartureREport extends Entity
{

    protected $table = 'departure_report';
    protected $fillable = ['*'];
    protected $section = 'departure_report';

}
