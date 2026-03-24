<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('home', [
            'username' => $username,
            'school' => $school
        ]);
    }


    public function createAccount(Request $request)
    {
        // echo $_POST['email'];
        // echo $request->password;

        // // $_FILES['uploaded_doc'];

        // $request->file('uploaded_doc');
        // $request->input('username');


        $validate = Validator::make($request->all(), [
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'confirmed:password']
        ]);

        // print_r($validate->errors());
        if ($validate->fails()) {
            // return view('signup')->with('errors', $validate->errors());
            // return back()->with('errors', $validate->errors())->withInput();
        // return redirect('/signup')->with('errors', $validate->errors())->withInput();
            }


            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
            ]);
    }




}
// Migrations are Structures to Define our tables, they eliminate manual table creation. 
// can we create tables manually? Yes. Do we hae to create table manualy? No. Life must not always be hard