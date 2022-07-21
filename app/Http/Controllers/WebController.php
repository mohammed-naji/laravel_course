<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $name = 'Mohammed';
        $desc = 'Graphic - Web Designer - Illustrator | رسم باقلام الفحم';
        // return view('ahmed')->with('name', $name)->with('desc', $desc);
        // return view('ahmed', compact('name', 'desc'));
        return view('ahmed', [
            'name' => $name,
            'desc' => $desc
        ]);
    }

    public function about()
    {
        return 'about page';
    }

    public function contact()
    {
        return 'contact page';
    }

    public function team()
    {
        return 'team page';
    }

    public function news($id = null)
    {
        return 'News ' . $id;
    }
}
