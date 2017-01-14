<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class PayMethod extends Entity{

    protected $table = 'pay_method';

    protected $fillable = ['method','modality','porcent'];



    public function getMetodoAttribute()
    {
        return $this->attributes['method'] .' '. $this->attributes['modality'].' ( '.$this->attributes['porcent'] .' % )' ;
    }

    public function getCoutasAttribute(){
        return explode(" ",$this->attributes['modality'])[0];
    }

    
}
