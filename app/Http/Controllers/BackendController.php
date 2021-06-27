<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard(){
        $total = Galeri::all()->count();
        $jadwal = Jadwal::all()->count();
        return view('backend.dashboard',compact('total','jadwal'));
    }   
}
