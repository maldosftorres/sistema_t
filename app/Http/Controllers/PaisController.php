<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    public function create()
    {
        $paises = Pais::all();
        return view('formPersona', compact('paises'));
    }
 
}
