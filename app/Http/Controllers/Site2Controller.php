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
        $data = [
            [
                'name' => 'Amal',
                'email' => 'amal@gmail.com'
            ],
            [
                'name' => 'Tahani',
                'email' => 'tahani@gmail.com'
            ],
            [
                'name' => 'Elias',
                'email' => 'elias@gmail.com'
            ],
            [
                'name' => 'lazar',
                'email' => 'lazar@gmail.com'
            ],
        ];
        return view('site2.about', compact('data'));
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
