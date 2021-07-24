<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index() {

        // Select data from datatbase and send it to view

        $data = [
            ['LOG CABIN', 'cabin.png', 'lorem'],
            ['TASTY CAKE', 'cake.png', 'lorem'],
            ['CIRCUS TENT', 'circus.png', 'lorem'],
            ['CIRCUS TENT', 'circus.png', 'lorem'],
        ];

        // $data = [];

        // return view('portfolio.index')->with('data', $data);
        // return view('portfolio.index', compact('data'));
        return view('portfolio.index', ['data' => $data]);
    }

    public function about() {
        return view('portfolio.about');
    }

    public function contact() {
        return view('portfolio.contact');
    }

    public function contactSubmit(Request $request) {
        $data = $request->except('_token');
        Mail::to('admin@example.com')->send(new ContactUsMail($data));
        return view('portfolio.contact');
    }

}
