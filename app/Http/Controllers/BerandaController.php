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
            // 'postimage' => Postberandaimage::all()
        ]);
    }

    public function tentangkami()
    {
        return view('pengunjung.tentangkami');
    }

    public function postingan()
    {      
        return view('pengunjung.postingan', [           
            'post' => Post::orderBy('id', 'desc')->paginate(6),
        ]);
    }

    public function detailpostingan($id)
    {
        $post = Post::find($id);

        return view('pengunjung.detailpostingan', [
            'produks' => Product::orderBy('id', 'desc')->take(3)->get(),
            'post' => $post, // Menggunakan $post yang telah ditemukan
            'sidebar' => Post::orderBy('id', 'desc')->take(4)->get(),
        ]);
    }


    public function produk()
    {
        return view('pengunjung.produk', [
            'produks' => Product::orderBy('id', 'desc')->paginate(6),
        ]);
    }

    public function detailproduk($id)
    {
        $product = Product::find($id);

        return view('pengunjung.detailproduk', [
            'produks' => Product::orderBy('id', 'desc')->take(3)->get(),
            'sidebar' => Post::orderBy('id', 'desc')->take(5)->get(),
            'post' => Post::orderBy('id', 'desc')->take(4)->get(),
            'product' => $product,
        ]);
    }


    public function kontak()
    {
        return view('pengunjung.kontak');
    }
}
