<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data['page_title'] = "Home | ZenBlog"; 
        return view("home"); 
    }
}