<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testdataController extends Controller
{
      public function index()
    {      
        return view('pages.TestData.test_data');
    } 
}