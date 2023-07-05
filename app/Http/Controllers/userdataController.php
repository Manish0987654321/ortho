<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class userdataController extends Controller
{
    function addData(Request $req)
    {
        $user =new User1();
        $user->fname=$req->fname;
        $user->lname=$req->lname;
        $user->email=$req->email;
        $user->number=$req->number;
        $user->password=$req->password;
        $user->save();
    }
}
