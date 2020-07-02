<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashboard()
    {
        return view('table');
    }
    public function data()
    {
        return view('data-tables');
    }

}
