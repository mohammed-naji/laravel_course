<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        $name = 'New Content';
        return view('site2.index')->with('name', $name);
        // return view('site2.master');
    }

    public function about()
    {
        return view('site2.about');
    }

    public function contact()
    {
        return view('site2.contact');
    }

    public function post()
    {
        return view('site2.post');
    }


}
