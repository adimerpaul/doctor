<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    function doctores(){
        return User::where('role', 'Doctor')
            ->with(['especialidad', 'ciudad'])
            ->get();
    }
}
