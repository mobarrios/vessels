<?php
namespace App\Entities\Configs;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = ['path'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
