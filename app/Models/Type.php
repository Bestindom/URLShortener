<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    public $timestamps = false;
    protected $primaryKey = 'type_id';

    public function users()
    {
        return $this->hasMany(Usuario::class, 'type_id');
    }
}
