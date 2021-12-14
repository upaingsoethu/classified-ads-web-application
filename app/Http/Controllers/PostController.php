<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function store()
    {

        Post::create([
            'title'=>$title='New Title',
            'body'=>'New Information',
            'slug'=>Str::slug($title),
            'user_id'=>1
        ]);
    }
}
