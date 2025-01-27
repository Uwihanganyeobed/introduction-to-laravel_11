<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('posts.index',['posts'=>$post]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $newPost = Post::create($data);
        return redirect(route('post.index'));
    }
    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request, Post $post){
        $data = $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $post->update($data);
        return redirect(route('post.index'))->with('success','Posts successfully updated');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect(route('post.index'))->with('success','Posts successfully deleted');
    }
}
