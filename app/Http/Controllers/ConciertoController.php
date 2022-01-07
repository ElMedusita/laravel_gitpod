<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concierto;
use PDF;

class ConciertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conciertos = Concierto::all();
        return view('conciertos.index', compact('conciertos'));
    }

    public function pdf()
    {
        $conciertos = Concierto::paginate();

        $pdf = PDF::loadView('conciertos.pdf',['conciertos'=>$conciertos]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conciertos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConciertoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function show(Concierto $concierto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concierto = Concierto::find($id);
        return view('conciertos.edit', compact('concierto'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id',
            'precio'        => 'required',
            'fecha'            => 'required|date_format:d-m-Y',
            'hora           '  => 'required|date_format:H:i',
            'lugar'  => 'required',
            'correo_contacto'  => 'required|email',
            'web'  => 'required',
        ]);

        $concierto = Concierto::find($id);
        $concierto->update($request->all());

        return redirect()->route('conciertos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concierto  $concierto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concierto $concierto)
    {
        //
    }
}
