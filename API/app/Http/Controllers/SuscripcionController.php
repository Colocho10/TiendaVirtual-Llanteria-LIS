<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    public function index()
    {
        $suscripciones = Suscripcion::all();
        return response()->json($suscripciones);
    }

    public function show($id)
    {
        $suscripcion = Suscripcion::findOrFail($id);
        return response()->json($suscripcion);
    }

    public function store(Request $request)
    {
        return Suscripcion::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->update($request->all());
        return $suscripcion;
    }

    public function destroy($id)
    {
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->delete();
        return 204;
    }
}
