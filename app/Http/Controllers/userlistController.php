<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userlistController extends Controller
{
 
    public function index()
    {      
        return view('pages.Users.user_list');
    } 

}
