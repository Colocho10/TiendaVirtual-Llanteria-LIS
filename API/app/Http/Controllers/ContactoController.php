<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();
        return response()->json($contactos);
    }

    public function show($id)
    {
        $contacto = Contacto::findOrFail($id);
        return response()->json($contacto);
    }

    public function store(Request $request)
    {
        return Contacto::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->update($request->all());
        return $contacto;
    }

    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();
        return 204;
    }

}
