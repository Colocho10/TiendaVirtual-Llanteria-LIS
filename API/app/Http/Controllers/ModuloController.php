<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModuloController extends Controller
{
    public function index()
    {
        $Modulos = Modulo::all();
        return response()->json($Modulos);
    }

    public function show($id)
    {
        $modulo = Modulo::findOrFail($id);
        return response()->json($modulo);
    }

    public function store(Request $request)
    {
        return Modulo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $modulo = Modulo::findOrFail($id);
        $modulo->update($request->all());
        return $modulo;
    }

    public function destroy($id)
    {
        $modulo = Modulo::findOrFail($id);
        $modulo->delete();
        return 204;
    }
}
