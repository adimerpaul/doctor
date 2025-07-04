<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    use HasFactory, Notifiable, SoftDeletes;
//$table->id();
//$table->string('name');
//$table->string('email')->unique();
//$table->timestamp('email_verified_at')->nullable();
//$table->string('password');
//$table->rememberToken();
//$table->unsignedBigInteger('especialidad_id');
//$table->unsignedBigInteger('ciudad_id')->nullable();
//$table->string('celular')->nullable();
//$table->string('avatar')->nullable();
//$table->string('horas_de_trabajo')->nullable();
//$table->decimal('tarifa', 8, 2)->nullable();
//$table->text('acerca')->nullable();
//$table->text('servicio')->nullable();
//$table->text('cuidado')->nullable();
//$table->string('direccion')->nullable();
//$table->decimal('lat', 10, 7)->nullable();
//$table->decimal('lng', 10, 7)->nullable();
//$table->foreign('especialidad_id')->references('id')->on('especialidades')->onDelete('cascade');
//$table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('set null');
//$table->string('status')->default('Activo'); // active, inactive, banned
//$table->string('role')->default('Usuario'); // user, admin, doctor, etc.
//$table->softDeletes();
//$table->timestamps();
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
        'status', // active, inactive, banned
        'role', // user, admin, doctor, etc.
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
