<?php

namespace App\Http\Controllers;
use App\Models\User1;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {      
        return view('pages.Profile.profile');
    } 

    public function list()
    {   
        $user_data= User1::all();   
       
        return view('pages.Profile.profile',['user_data'=>$user_data]);
    }
}
