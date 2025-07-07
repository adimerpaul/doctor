<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable{
    use HasFactory, Notifiable, SoftDeletes, HasApiTokens;
    protected $fillable = [
        'name',
        'email',
        'password',
        'especialidad_id',
        'ciudad_id',
        'celular',
        'avatar',
        'horas_de_trabajo',
        'tarifa',
        'acerca',
        'servicio',
        'cuidado',
        'direccion',
        'lat',
        'lng',
        'status',
        'role',
    ];

    protected $hidden = [
        'deleted_at',
        'email_verified_at',
        'created_at',
        'updated_at',
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function especialidad(){
        return $this->belongsTo(Especialidad::class);
    }
    public function ciudad(){
        return $this->belongsTo(Ciudad::class);
    }
}
