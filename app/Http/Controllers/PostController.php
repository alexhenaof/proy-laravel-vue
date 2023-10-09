<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post.create', ['post' => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePost $request)
    {
        Post::create($request->validated());
        return back()->with('status', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit', ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Post $post)
    // public function update(StorePostPost $request, Post $post) Creo que hay error
    public function update(StorePost $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status', "Post modificado exitosamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Post eliminado exitosamente');
    }

    public function image(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png|max:10240',
        ]);
        $filename = time() . "." . $request->image->extension();
        $request->image->move(public_path('images'), $filename);
        echo "subio la imagen" . $filename;
        PostImage::create(['image' => $filename, 'post_id' => $post->id]);
        return back()->with('status', 'Imagen cargada con exito');
    }
}
