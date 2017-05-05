<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Vouchers;
use App\Entities\Entity;

class Files extends Entity
{

    protected $table = 'files';

    protected $fillable = ['invoices_id', 'senders_id', 'form_01', 'form_01_file', 'form_12', 'form_12_file', 'form_59', 'form_59_file', 'dni_photocopy', 'dni_photocopy_file', 'proof_of_cuil', 'proof_of_cuil_file','sales_id'];

    protected $section = 'files';

    public function invoice(){
        return $this->belongsTo(Vouchers::getClass(),'invoices_id');
    }

    public function sender(){
        return $this->belongsTo(Vouchers::getClass(),'senders_id');
    }

    public function sales(){
        return $this->belongsTo(Sales::getClass());
    }

    public function form12(){
        return $this->hasOne(Form12::getClass());
    }

    public function form59(){
        return $this->hasOne(Form59::getClass());
    }

}


