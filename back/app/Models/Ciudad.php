<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model{
    use SoftDeletes;
    protected $table = 'ciudades';
    protected $fillable = [
        'nombre',
    ];
}
