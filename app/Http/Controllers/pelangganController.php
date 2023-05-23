<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function index(){
        $pelanggan = $this->dataPelanggan();
        return view ('pelanggan.index', compact('pelanggan'));
    }

    public function dataPelanggan(){
        $pelanggan = ['ida', 'bagus', 'ketut', 'sandhisutra'];
        return $pelanggan;
    }    
}
