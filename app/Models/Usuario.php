<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $primaryKey = 'user_id';

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
