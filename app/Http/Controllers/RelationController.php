<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(1);
        // $insurance = Insurance::where('user_id', $user->id)->first();

        $insurance = Insurance::find(1);

        dd($insurance->user);
    }
}
