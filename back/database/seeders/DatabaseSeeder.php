<?php

namespace Database\Seeders;

use App\Models\Carrusel;
use App\Models\Ciudad;
use App\Models\Especialidad;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(): void{
        Carrusel::create(["src"=>"1.png"]);
        Carrusel::create(["src"=>"2.png"]);
        Carrusel::create(["src"=>"3.png"]);

        Especialidad::create(["img"=>"10.png", "nombre"=>"Dentista"]); //1
        Especialidad::create(["img"=>"11.png", "nombre"=>"Cardiologo"]); //2
        Especialidad::create(["img"=>"12.png", "nombre"=>"Dermatologo"]); //3
        Especialidad::create(["img"=>"13.png", "nombre"=>"Ayurveda"]); //4
        Especialidad::create(["img"=>"14.png", "nombre"=>"Oftalmologo"]); //5
        Especialidad::create(["img"=>"15.png", "nombre"=>"Ortopedista"]); //6
        Especialidad::create(["img"=>"16.png", "nombre"=>"Urologo"]); //7
        Especialidad::create(["img"=>"17.png", "nombre"=>"Ginecologo"]); //8
        Especialidad::create(["img"=>"18.png", "nombre"=>"Gastroenterologo"]); //9
        Especialidad::create(["img"=>"19.png", "nombre"=>"Homeopata"]); //10
        Especialidad::create(["img"=>"20.png", "nombre"=>"Neumologo"]); //11
        Especialidad::create(["img"=>"21.png", "nombre"=>"Cuidado de la piel"]); //12

        Ciudad::create(["nombre"=>"San Jose"]); //1
        Ciudad::create(["nombre"=>"Dallas"]); //2
        Ciudad::create(["nombre"=>"San Antonio"]); //3
        Ciudad::create(["nombre"=>"Philadelphia"]); //4
        Ciudad::create(["nombre"=>"Phoenix"]); //5
        Ciudad::create(["nombre"=>"Houston"]); //6
        Ciudad::create(["nombre"=>"Los Angeles"]); //7
        Ciudad::create(["nombre"=>"Chicago"]); //8
        Ciudad::create(["nombre"=>"Washington"]); //9
        Ciudad::create(["nombre"=>"New York"]); //10
    }
}
