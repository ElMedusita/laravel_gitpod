<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use PDF;
use Carbon\Carbon;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));

        $edad = \Carbon\Carbon::parse($artista->fecha_nacimiento)->age;
        return $edad;

    }

    public function pdf()
    {
        $artistas = Artista::paginate();

        $pdf = PDF::loadView('artistas.pdf',['artistas'=>$artistas]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtistaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id',
            'nombre'            => 'required',
            'email'             => 'required|email',
            'telefono'          => 'required',
            'procedencia'       => 'required',
            'fecha_nacimiento'  => 'required|date_format:d-m-Y|before:10-10-2010',
        ]);

        Artista::create($request->all());

        return redirect()->route('artistas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artista = Artista::find($id);
        return view('artistas.edit', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtistaRequest  $request
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id',
            'nombre'            => 'required',
            'email'             => 'required|email',
            'telefono'          => 'required',
            'procedencia'       => 'required',
            'fecha_nacimiento'  => 'required|date-format:d-m-Y|before:10-10-2010',
        ]);

        $artista = Artista::find($id);
        $artista->update($request->all());

        return redirect()->route('artistas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artista $artista)
    {
        Artista::find($artista->id)->delete();
        return redirect()->route('artistas.index');
    }
}
