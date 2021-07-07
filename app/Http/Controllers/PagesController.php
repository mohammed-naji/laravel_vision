<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function show() {
        $sports = ['Football', 'Basketball', 'Vollyball'];
        // $sports = [];
        return view('show')->with('sports', $sports);
        // $sports = array();
        // $name = 'Mohammed Naji';
        // $age = 27;
        // $edu = 'Master';
        // return view('show')->with('name', $name)->with('age', $age);
        // return view('show', compact('name', 'age'));
        // return view('show', [
        //     'name' => $name,
        //     'age' => $age,
        //     'edu' => $edu
        // ]);
    }

    public function check($type) {
        return 'Welcome ' . $type;
    }

    public function home() {
        // return 'Homepage';
        return view('home');
    }

    public function about() {
        // return 'about';
        return view('about');
    }

    public function contact() {
        // return 'contact';
        return view('contact');
    }

    public function services() {
        // return 'services';
        return view('services');
    }

    public function team() {
        // return 'team';
        return view('team');
    }

    public function album() {
        return view('album.index');
    }
}
