<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudBeca extends Controller
{
    //
    public function llenar_solicitud(){
        return view('solicitud');
    }

    public function mandar_solicitud()
    {
        
    }
}
