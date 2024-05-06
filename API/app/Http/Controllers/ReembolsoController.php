<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reembolso;

class ReembolsoController extends Controller
{
    public function index()
    {
        $reembolsos = Reembolso::all();
        return response()->json($reembolsos);
    }

    public function show($id)
    {
        $reembolso = Reembolso::findOrFail($id);
        return response()->json($reembolso);
    }

    public function store(Request $request)
    {
        return Reembolso::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $reembolso = Reembolso::findOrFail($id);
        $reembolso->update($request->all());
        return $reembolso;
    }

    public function destroy($id)
    {
        $reembolso = Reembolso::findOrFail($id);
        $reembolso->delete();
        return 204;
    }
}
