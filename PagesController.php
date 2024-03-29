<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('pages.about')->with('page',"about");
    }
    public function contact()
    {
        return view('pages.contact')->with('page',"contact");
    }
}
