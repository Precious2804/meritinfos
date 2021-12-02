<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function about()
    {
        return view('/about');
    }

    public function team()
    {
        return view('/team');
    }

    public function services()
    {
        return view('/services');
    }
}
