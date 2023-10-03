<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.produk.index', [
            'produks' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'deskripsi_produk' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('storage/uploads/produk','public');
        }

        Product::create($validatedData);

        return redirect('/dashboard/produk')->with('success', 'post baru telah ditambahkan!');

      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('admin.produk.show', [
            'produks' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('admin.produk.edit', compact('product'));
        } catch (ModelNotFoundException $e) {
            return redirect('/dashboard/produk')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_produk' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:20048',
            'deskripsi_produk' => 'required',
        ];

        $validatedData = $request->validate($rules);

        try {
            $product = Product::findOrFail($id);

            $product->fill($request->all());

            if ($request->file('image')) {
                if ($product->image) {
                    Storage::delete($product->image);
                }

                $file = $request->file('image');
                $id = $file->getClientOriginalName();
                $path = $file->storeAs('public/post-images', $id);
                $product->image = str_replace('public/', 'storage/', $path);
            }

            Product::where('id', $product->id)
                ->update($validatedData);

            // $post->save();

            return redirect('/dashboard/produk')->with('success', 'Postingan Berhasil Di Update!');
        } catch (ModelNotFoundException $e) {
            return redirect('/dashboard/produk')->with('error', 'Data tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect('/dashboard/produk')->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect('/dashboard/produk')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect('/dashboard/produk')->with('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
        }
    }
}
