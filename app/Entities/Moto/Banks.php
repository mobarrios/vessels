<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Entity;

class Banks extends Entity
{

    protected $table = 'banks';

    protected $fillable = ['name'];




    public function Checkbooks()
    {
        return $this->hasOne(Checkbooks::class);
    }

}


