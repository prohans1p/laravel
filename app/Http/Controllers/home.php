<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index() {
        $name = 'Vidya Anggita';
        $sekolah = ' SMK BAKTI NUSANTARA 666';
        return view('home', [
            'name' => $name ,
            'sekolah' => $sekolah
        ]);
    }
}
