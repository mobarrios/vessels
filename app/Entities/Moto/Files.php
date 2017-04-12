<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Vouchers;
use App\Entities\Entity;

class Files extends Entity
{

    protected $table = 'files';

    protected $fillable = ['invoices_copia', 'invoices_id', 'sender', 'form_01', 'form_01_file', 'form_12', 'form_12_file', 'form_59', 'form_59_file', 'dni_photocopy', 'dni_photocopy_file', 'proof_of_cuil', 'proof_of_cuil_file'];

    protected $section = 'files';

    public function invoiceCopia(){
        return $this->belongsTo(Vouchers::getClass(),'invoices_copia');
    }

}


