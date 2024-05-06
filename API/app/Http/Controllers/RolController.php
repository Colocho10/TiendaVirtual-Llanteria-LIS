<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $Roles = Rol::all();
        return response()->json($Roles);
    }

    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return response()->json($rol);
    }

    public function store(Request $request)
    {
        return Rol::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return $rol;
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return 204;
    }
}
