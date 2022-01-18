<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarMail;

class MailController extends Controller
{
    public function sendEmail() {
        $details=[
            'title' =>  'Inicio sesión en Resurrection Fest',
            'body'  =>  'Se ha registrado un inicio de sesión en el sitio web'
        ];

        Mail::to("alexisgilcabrera@gmail.com")->send(new EnviarMail($details));
        return "Correo Electrónico ENVIADO";
    }
}
