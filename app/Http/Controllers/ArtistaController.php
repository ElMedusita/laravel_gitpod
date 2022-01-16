<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use PDF;

class ArtistaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    public function pdf()
    {
        $artistas = Artista::all();

        $pdf = PDF::loadView('artistas.pdf',['artistas'=>$artistas]);
        set_time_limit(500);
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
            'id'                => 'required',
            'nombre'            => 'required',
            'email'             => 'required|email',
            'telefono'          => 'required',
            'procedencia'       => 'required',
            'fecha_nacimiento'  => 'required|date',
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
            'id'                => 'required',
            'nombre'            => 'required',
            'email'             => 'required|email',
            'telefono'          => 'required',
            'procedencia'       => 'required',
            'fecha_nacimiento'  => 'required|date',
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
    public function destroy($id)
    {
        Artista::find($id)->delete();
        return redirect()->route('artistas.index');
    }
}
