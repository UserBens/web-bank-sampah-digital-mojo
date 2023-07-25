<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('pengunjung.beranda');
    }

    public function tentangkami()
    {
        return view('pengunjung.tentangkami');
    }

    public function postingan()
    {
        return view('pengunjung.postingan');
    }

    public function produk()
    {
        return view('pengunjung.produk');
    }

    public function kontak()
    {
        return view('pengunjung.kontak');
    }
}
