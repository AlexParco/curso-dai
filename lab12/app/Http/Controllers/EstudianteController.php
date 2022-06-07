<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('pages.estudiante.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('pages.estudiante.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'apellido' => 'required|min:5',
        ]);

        Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'clase' => $request->clase,
        ]);

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiantes agregado con exito correctamente .');
    }

    public function show(Estudiante $estudiante)
    {
        return view('pages.estudiante.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        return view('pages.estudiante.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'apellido' => 'required|min:5',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante actualizado con éxito.');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiantes Eliminado correctamente .');
    }
}
