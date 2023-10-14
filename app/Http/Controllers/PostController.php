<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.postingan.index', [
            'post' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('storage/uploads/postingan','public');
        }

        Post::create($validatedData);

        return redirect('/dashboard/postingan')->with('success', 'post baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */ 
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.postingan.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $post = Post::findOrFail($id);
            return view('admin.postingan.edit', compact('post'));
        } catch (ModelNotFoundException $e) {
            return redirect('/dashboard/postingan')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image|file|max:20024',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        try {
            $post = Post::findOrFail($id);

            $post->fill($request->all());

            if ($request->file('image')) {
                if ($post->image) {
                    Storage::delete($post->image);
                }

                $file = $request->file('image');
                $id = $file->getClientOriginalName();
                $path = $file->storeAs('storage/uploads/postingan','public', $id);
                $post->image = str_replace('storage/uploads/postingan','public', $path);
            }
            
            Post::where('id', $post->id)
            ->update($validatedData);

            // $post->save();

            return redirect('/dashboard/postingan')->with('success', 'Postingan Berhasil Di Update!');
        } catch (ModelNotFoundException $e) {
            return redirect('/dashboard/postingan')->with('error', 'Data tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect('/dashboard/postingan')->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();
            return redirect('/dashboard/postingan')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect('/dashboard/postingan')->with('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
        }
    }
}
