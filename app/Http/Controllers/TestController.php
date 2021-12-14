<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return 'Register Page';
    }

    public function login()
    {
        return 'Login Page';
    }

    public function products()
    {
        $products = ['name'=>'I Phone','price'=>100];
        return view('home',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
           'title'=>'required|min:3|max:20',
           'description'=>'required'
       ],
    //    [
    //        'title.required'=>'Please Enter Your Title',
    //        'description.required'=>'Please Enter Your Description'
    //    ]
    );
        dd(request('description'));
    }

}
