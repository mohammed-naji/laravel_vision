<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('portfolio.index');
    }

    public function about() {
        return view('portfolio.about');
    }

    public function contact() {
        return view('portfolio.contact');
    }

}
