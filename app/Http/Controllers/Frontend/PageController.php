<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function updates()
    {
        return view('frontend.update');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function uscenter()
    {
        return view('frontend.us_center');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function academy()
    {
        return view('frontend.academy');
    }

    public function ncsi()
    {
        return view('frontend.ncsi');
    }

    public function cxtransformation()
    {
        return view('frontend.cx_transformation');
    }
}
