<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Concierto;
use PDF;

class ReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }
    
    public function pdf()
    {
        $reservas = Reserva::all();

        $pdf = PDF::loadView('reservas.pdf',['reservas'=>$reservas]);
        set_time_limit(500);
        return $pdf->stream();
    }

    public function create()
    {
        $conciertos = Concierto::all();
        return view('reservas.create', compact('conciertos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id'            => 'required',
            'nombre'        => 'required',
            'fecha_reserva' => 'required|date',
            'hora_reserva'  => 'required|date_format:H:i',
            'concierto_id'  => 'required',
        ]);

        Reserva::create($request->all());
        return redirect()->route('reservas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reserva = Reserva::find($id);
        $conciertos = Concierto::all();
        return view('reservas.edit', compact('reserva', 'conciertos'));
    }
    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id'            => 'required',
            'nombre'        => 'required',
            'fecha_reserva' => 'required|date',
            'hora_reserva'  => 'required|date_format:H:i',
            'concierto_id'  => 'required',
        ]);

        $reserva = Reserva::find($id);
        $reserva->update($request->all());

        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        Reserva::find($id)->delete();
        return redirect()->route('reservas.index');
    }
}