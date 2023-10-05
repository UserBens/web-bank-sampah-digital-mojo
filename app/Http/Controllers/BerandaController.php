<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Postberandaimage;
use App\Models\Product;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('pengunjung.beranda', [
            'produks' => Product::orderBy('id', 'desc')->take(3)->get(),
            'sidebar' => Post::orderBy('id', 'desc')->take(5)->get(),
            'post' => Post::orderBy('id', 'desc')->take(4)->get(),
            'detailpost' => Post::orderBy('id', 'desc')->take(1)->get(),
            'postimage' => Postberandaimage::all()
        ]);
    }

    public function tentangkami()
    {
        return view('pengunjung.tentangkami');
    }

    public function postingan()
    {
        // dd(Post::all());
        return view('pengunjung.postingan', [
            // 'post' => Post::all()
            'post' => Post::orderBy('id', 'desc')->take(6)->get(),
        ]);
        
    }

    public function detailpostingan()
    {
        // dd(Post::all());
        return view('pengunjung.detailpostingan', [
            // 'post' => Post::all()
            'post' => Post::orderBy('id', 'desc')->take(6)->get(),
        ]);
        
    }

    public function produk()
    {
        return view('pengunjung.produk', [
            'produks' => Product::orderBy('id', 'desc')->take(6)->get(),
        ]);
    }

    public function kontak()
    {
        return view('pengunjung.kontak');
    }
}
