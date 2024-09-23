<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
    public function index() {
        $isi = 'Saya adalah seorang UI/UX Designer dan Web Developer yang fokus pada desain antarmuka pengguna yang fungsional dan menarik.
         Dengan keahlian di HTML, CSS, dan Bootstrap, saya terus mengembangkan kemampuan dalam desain dan pengembangan web. Saya disiplin, tegas,
          dan selalu tepat waktu dalam setiap proyek.';
          $tgl = '22 november 2006';
          $blogger = 'vidya@blogger';
          $no = '+62 838 2011 5629';
          $city = 'Bandung Timur';

        return view('about', [
            'isi' => $isi,
            'tgl' => $tgl, 'blogger' => $blogger, 'no' => $no, 'city' => $city

        ]);
    }
}


