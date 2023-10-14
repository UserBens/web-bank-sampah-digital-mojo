<?php

namespace App\Http\Controllers;

use App\Models\Postberandaimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class BerandaimageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Postberandaimage::all();
        return view('admin.beranda.index', [
            'postimage' => Postberandaimage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.beranda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'nama_file' => 'required|max:255',
        //     'image' => 'required|mimes:pdf,doc,docx|max:20000',
        // ]);


        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('public/data-file');
        // }

        // Postberandaimage::create($validatedData);

        // return redirect('/dashboard/beranda')->with('success', 'post baru telah ditambahkan!');

        try {
            $validatedData = $request->validate([
                'nama_file' => 'required|max:255',
                'image' => 'required|mimes:jpg,jpeg,png|max:20000',
            ]);

            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('public/data-file');
            }

            Postberandaimage::create($validatedData);

            return redirect('/dashboard/beranda')->with('success', 'post baru telah ditambahkan!');
        } catch (\Exception $e) {
            return redirect('/dashboard/beranda')->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $postimage = Postberandaimage::findOrFail($id);
            return view('admin.beranda.edit', compact('postimage'));
        } catch (ModelNotFoundException $e) {
            return redirect('/dashboard/beranda')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_file' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:20048',
        ];

        $validatedData = $request->validate($rules);

        try {
            $postimage = Postberandaimage::findOrFail($id);

            $postimage->fill($request->all());

            if ($request->file('image')) {
                if ($postimage->image) {
                    Storage::delete($postimage->image);
                }

                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $path = $file->storeAs('public/data-file', $fileName);
                $postimage->image = str_replace('public/', 'storage/', $path);
            }

            $postimage->save();

            return redirect('/dashboard/beranda')->with('success', 'Postingan Berhasil Di Update!');
        } catch (ModelNotFoundException $e) {
            return redirect('/dashboard/beranda')->with('error', 'Data tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect('/dashboard/beranda')->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $post = Postberandaimage::findOrFail($id);
            $post->delete();
            return redirect('/dashboard/beranda')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect('/dashboard/beranda')->with('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
        }
    }
}
