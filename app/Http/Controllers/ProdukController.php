<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function tampil_produk(Request $request)
    {
        $allData = produk::paginate(5);
        return view('admin.produk.index',['data'=>$allData]);
    }
    public function admin_editproduk($id)
    {
        $edit = produk::find($id);
        return view('admin.produk.edit',['data'=>$edit]);
    }
    public function admin_addproduk()
    {
        return view('admin.produk.tambah');
    }

    //create
    public function add_adminproduk(Request $request)
    {
       
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img'), $imageName);
        
        $newData = new produk();
        $newData->nama_produk= $request->nama_produk;
        $newData->harga= $request->harga;
        $newData->gambar= $imageName;
        $newData->save();
        
        return redirect('/');

    }

    //update
    public function edit_adminproduk(Request $request)
    {
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img'), $imageName);
        produk::where('id',$request->id)->update(
            
            [
                'nama_produk'=>$request->nama_produk,
                'harga'=>$request->harga,
                'gambar'=>$imageName,
            ]
        );
        return redirect('/');
    }
}

