<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showIndex()
    {
        $username = 'David';
        $school = 'SQI';
        // return view('home');

        // with method
        // return view('home')->with('name', $username);

        // compact method
        // return view('home', compact('username,'school));

        // direct Method
        return view('home', ['username' => $username, 'school' => $school]);
    }
    //
}
