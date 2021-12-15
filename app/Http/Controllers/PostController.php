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
        $datas = Post::paginate(5);
        return view('post.index',compact('datas'));
    }

    public function create()
    {

        Post::create([
            'title'=>$title='New Title',
            'body'=>'New Information',
            'slug'=>Str::slug($title),
            'user_id'=>1
        ]);
    }


    public function update($id)
    {
        // $data = Post::find($id);
        // $data->title ="Updated Data";
        // $data->save();
        // return $data;
        Post::where('id',$id)->update(['title'=>'hello','body'=>'hello body']);
    }

    public function delete($id)
    {
        $data = Post::where('id',$id);
        $data->delete();



    }

    public function search($id)
    {
        $post = Post::where('user_id',1)->first();
        return $post;
    }
}
