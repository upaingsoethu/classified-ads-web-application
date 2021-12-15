<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $data = Post::all()->where('user_id',0);
        return $data;
    }
    public function store()
    {

        Post::create([
            'title'=>$title='New Title',
            'body'=>'New Information',
            'slug'=>Str::slug($title),
            'user_id'=>1
        ]);
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return $post;
    }
}
