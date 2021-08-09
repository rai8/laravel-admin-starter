<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    ///render admin dashboard
    function dashboard()
    {
        return view('home.dashboard');
    }


}
