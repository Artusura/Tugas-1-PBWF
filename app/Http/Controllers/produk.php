<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class produk extends Controller
{
    public function index()
    {
        $produk = 'Aqua 400ML';
        return view('produk/index', compact('produk'));
        //echo "coba";
    }
    public function show(){
        $produk = ['Budi', 'Susanti', 'Jarjit'];
        return view('produk/show',compact('produk'));
        echo "jjj";
    }
}