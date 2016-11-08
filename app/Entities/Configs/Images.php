<?php
namespace App\Entities\Configs;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table    = 'images';
    protected $fillable = ['path'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
