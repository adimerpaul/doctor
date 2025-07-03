<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model{
    protected $table = 'carruseles';
    protected $fillable = [
        'src',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
