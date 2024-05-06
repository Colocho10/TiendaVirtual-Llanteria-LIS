<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permisos;

class PermisosController extends Controller
{
    public function index()
    {
        $permisos = Permisos::all();
        return response()->json($permisos);
    }

    public function show($id)
    {
        $permiso = Permisos::findOrFail($id);
        return response()->json($permiso);
    }

    public function store(Request $request)
    {
        return Permisos::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $permiso = Permisos::findOrFail($id);
        $permiso->update($request->all());
        return $permiso;
    }

    public function destroy($id)
    {
        $permiso = Permisos::findOrFail($id);
        $permiso->delete();
        return 204;
    }
}
