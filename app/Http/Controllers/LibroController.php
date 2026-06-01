<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.show', compact('libros'));
    }

    public function create()
    {
        return view('libros.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor'  => 'required|string|max:255',
            'año'    => 'required|integer|min:1|max:2099',
        ]);

        Libro::create($request->only('titulo', 'autor', 'año'));
        return redirect()->route('libros.index')->with('success', 'Libro registrado correctamente.');
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor'  => 'required|string|max:255',
            'año'    => 'required|integer|min:1|max:2099',
        ]);

        $libro->update($request->only('titulo', 'autor', 'año'));
        return redirect()->route('libros.index')->with('success', 'Libro actualizado correctamente.');
    }

    public function confirmDelete(Libro $libro)
    {
        return view('libros.delete', compact('libro'));
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente.');
    }
}