<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();
        return response()->json($prestamos);
    }

    public function show($id)
    {
        $prestamo = Prestamo::find($id);
        return response()->json($prestamo);
    }

    public function store(Request $request)
    {
        $prestamo = Prestamo::create($request->all());
        return response()->json($prestamo, 201);
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->update($request->all());
        return response()->json($prestamo, 200);
    }

    public function destroy($id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->delete();
        return response()->json(null, 204);
    }
}
