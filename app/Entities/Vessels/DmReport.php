<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class DmReport extends Entity
{

    protected $table = 'dm_report';
    protected $fillable = ['*'];
    protected $section = 'dm_report';

}
