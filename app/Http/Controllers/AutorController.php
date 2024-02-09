<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return response()->json($autores);
    }

    public function show($id)
    {
        $autor = Autor::find($id);
        return response()->json($autor);
    }

    public function store(Request $request)
    {
        $autor = Autor::create($request->all());
        return response()->json($autor, 201);
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        $autor->update($request->all());
        return response()->json($autor, 200);
    }

    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();
        return response()->json(null, 204);
    }
}
