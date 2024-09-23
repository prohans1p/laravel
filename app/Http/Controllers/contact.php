<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    public function index() {
        $alamat = '3P8R+RCW, Jl. Kav. Pos Giro 2, Cimekar, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40623';
        $no = '+62 838 2011 5629';
        $email = 'vidya@gmail.com';
        return view('contact', [
           'alamat' => $alamat, 'no' => $no, 'email' => $email
        ]);
    }
}
