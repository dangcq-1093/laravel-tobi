<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.post', compact('posts'));
    }

    public function create()
    {
        return view('admin.post-create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.post.index')->with('message', 'Created succesful!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('layouts.news', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('admin.post.index')->with('message', 'Update succesful!');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id)->delete();

        return redirect()->route('admin.post.index')->with('message', 'Delete succesful!');
    }
}
