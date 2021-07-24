<?php

namespace App\Http\Controllers;

use App\Mail\AgencyContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgencyController extends Controller
{
    public function index() {
        return view('agency.index');
    }

    public function services() {
        return view('agency.services');
    }

    public function portfolio() {
        return view('agency.portfolio');
    }

    public function about() {
        return view('agency.about');
    }

    public function team() {
        return view('agency.team');
    }

    public function contact() {
        return view('agency.contact');
    }

    public function contactSubmit(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = $request->except('_token');

        Mail::to('admin@admin.com')->send(new AgencyContactUsMail($data));

        return redirect()->route('agency.contact');
    }
}
