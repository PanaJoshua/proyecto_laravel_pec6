<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Requests\LibroRequest;
use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
            ['only' => ['create', 'store', 'edit', 'update', 'destroy']]
        );
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::latest()->paginate(10);
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autor::all();
        return view('libros.create', compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibroRequest $request)
    {
        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->editorial = $request->input('editorial');
        $libro->precio = $request->input('precio');
        $libro->año_publicacion = $request->input('año_publicacion');
        $libro->descripcion = $request->input('descripcion');
        $autor_id = $request->input('autor_id');
        $libro->autor()->associate(Autor::findOrFail($autor_id));
        $libro->save();

        return redirect()->route('libros.index')->with('mensaje', 'El libro ' . $libro->titulo . ' se ha añadido correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $autores = Autor::all();
        $libro = Libro::findOrFail($id);

        return view('libros.edit', compact('autores', 'libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->titulo = $request->input('titulo');
        $libro->editorial = $request->input('editorial');
        $libro->precio = $request->input('precio');
        $libro->año_publicacion = $request->input('año_publicacion');
        $libro->descripcion = $request->input('descripcion');
        $autor_id = $request->input('autor_id');
        $libro->autor()->associate(Autor::findOrFail($autor_id));
        $libro->update();

        return redirect()->route('libros.index')->with('mensaje', 'El libro ' . $libro->titulo . ' se ha editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('mensaje', 'Libro eliminado');
    }
}
