<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postberandaimage;


class DashboardController extends Controller
{
    public function index() 
    {
        return view('admin.dashboard.layouts.main');
    }

    // public function beranda() 
    // {
    //     return view('admin.beranda.index', [
    //         'data' => Postberandaimage::all(),
    //     ]);
    // }

    public function postingan() 
    {
        return view('admin.postingan.index');
    }

    public function produk() 
    {
        return view('admin.produk.index');
    }

    public function tentangkami() 
    {
        return view('admin.tentangkami.index');
    }

    public function kontak() 
    {
        return view('admin.kontak.index');
    }
}
