<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArduinoController extends Controller
{
    //
    public function checkStatus() {
        $status = Http::get(env('ARDUINO_ADDRESS'))->body();
        dd($status);
    }

    public function index() {
        return view('dashboard');
    }

    public function sync() {
        return view('sincronizar');
    }

    public function history(){
        return view('historico');
    }
}
