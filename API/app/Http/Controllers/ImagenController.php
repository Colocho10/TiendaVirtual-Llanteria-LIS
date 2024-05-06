<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class ImagenController extends Controller
{
    public function index()
    {
        $imagenes = Imagen::all();
        return response()->json($imagenes);
    }

    public function show($id)
    {
        $imagen = Imagen::findOrFail($id);
        return response()->json($imagen);
    }

    public function store(Request $request)
    {
        return Imagen::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $imagen = Imagen::findOrFail($id);
        $imagen->update($request->all());
        return $imagen;
    }

    public function destroy($id)
    {
        $imagen = Imagen::findOrFail($id);
        $imagen->delete();
        return 204;
    }
}
