<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Entity;

class TypesSmallBoxes extends Entity
{

    protected $table = 'types_small_boxes';

    protected $fillable = ['name'];




    public function SmallBoxes()
    {
        return $this->hasOne(SmallBoxes::class);
    }

}


