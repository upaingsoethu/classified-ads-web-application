<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
