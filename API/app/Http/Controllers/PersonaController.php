<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return response()->json($personas);
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return response()->json($persona);
    }

    public function store(Request $request)
    {
        return Persona::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());
        return $persona;
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return 204;
    }

}
