<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller{
    function dashboard():View{
        return view('dashboard.template');
    }
}
