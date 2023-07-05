<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class NewusersController extends Controller
{



    public function index()
    {      
        return view('pages.Users.new_user');
    } 

    public function store(Request $req)
    {      
        $user =new User1();
        $user->fname=$req->fname;
        $user->lname=$req->lname;
        $user->email=$req->email;
        // $user->number=$req->number;
        // $user->password=$req->password;
        $user->save();
        return view('pages.Users.new_user');
    } 
}
