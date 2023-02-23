<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('index', compact('posts'));
    }

    public function show($id)
    {
        $post = DB::table('posts')->where('id', '=', $id)->first();
        return view('singlePost', compact('post'));
    }

    public function create()
    {
        return view('createPost');
    }

    public function store(Request $request)
    {
        $post = DB::table('posts')->insert([
            'title'       => $request->title,
            'description' => $request->description,
            'url'         => fake()->imageUrl(),
            'likes'       => rand(1, 1000),
            'post_by'     => $request->post_by,
        ]);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', '=', $id)->first();
        return view('editPost', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = DB::table('posts')->where('id', '=', $id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'url'         => fake()->imageUrl(),
            'likes'       => rand(1, 1000),
            'post_by'     => $request->post_by,
        ]);
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        $post = DB::table('posts')->where('id', '=', $id)->delete();
        return redirect()->route('post.index');
    }
}
