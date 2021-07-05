<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index() {
        return view('site2.index');
    }

    public function about() {
        return view('site2.about');
    }

    public function team() {
        return view('site2.team');
    }

    public function contact() {
        return view('site2.contact');
    }

    public function faq() {
        return view('site2.faq');
    }

    public function services() {
        return view('site2.services');
    }
}
