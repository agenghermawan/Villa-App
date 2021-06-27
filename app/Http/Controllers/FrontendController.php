<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landingpage(){
           return view('frontend.vila');
    }
    public function kontak(){
        return view('frontend.kontakkami');
    }
        public function tentang(){
        return view('frontend.tentangkami');
    }
        public function galeri(){
        $data = Galeri::all();
        return view('frontend.galeri',compact('data'));
    }
        public function jadwal(){
             $data = Jadwal::all();
        return view('frontend.jadwal')->with([
            'data' => $data
        ]);
    }

}
