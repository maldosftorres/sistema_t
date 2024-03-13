<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formPersona');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
             'nombre' => 'required',
             'apellido' => 'required',
            // Agrega validaciones para otros campos según tus necesidades
        ]);

        // Crear una nueva instancia de Persona con los datos del formulario
        $persona = new Persona();
        $persona->nombre_persona = $request->input('nombre');
        $persona->apellido_persona = $request->input('apellido');
        $persona->direccion_particular = $request->input('direccion_particular');
        $persona->direccion_laboral = $request->input('direccion_laboral');
        $persona->email = $request->input('email');
        $persona->nro_telef_celular = $request->input('nro_telef_celular');
        $persona->sitio_web = $request->input('sitio_web');
        $persona->observacion = $request->input('observacion');
        $persona->id_pais = $request->input('id_pais');

        // Asignar el id de usuario actual
        $persona->id_user = auth()->user()->id;

        // Guardar los datos de la persona
        $persona->save();

        // Redirigir a una página de éxito o a donde desees
        return redirect()->route('dashboard')->with('success', 'Datos guardados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
