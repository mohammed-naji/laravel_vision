<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index() {
        return view('forms.index');
    }

    public function formSubmit(Request $request) {

        // $user = $request->input('user');
        $user = $request->username;

        // $pass = $request->input('pass');
        $pass = $request->pass;

        return "Your username is $user and your password is $pass";

    }


    public function form2() {
        return view('forms.form2');
    }
    public function form2Submit(Request $request) {

        // dd($_FILES['image']);
        // dd($request->all());
        // dd($request->except(['_token']));
        // dd($request->only(['age']));



        // Upload any file
        // $name = $request->file('image')->getClientOriginalName();

        // rename the uploaded file
        $ex = $request->file('image')->getClientOriginalExtension();
        $imgname = 'laravel_vision_'.rand().'_'.rand().'.'.$ex;
        $request->file('image')->move(public_path('uploads'), $imgname);

        $name = $request->name;
        $age = $request->age;

        return view('forms.welcome', compact('name', 'age', 'imgname'));
    }


    public function form3() {
        return view('forms.form3');
    }

    public function form3Submit(Request $request) {
        // $name = $request->file('image')->getClientOriginalName();
        $ex = $request->file('image')->getClientOriginalExtension();
        $name = rand().'_'.rand().'.'.$ex;
        $request->file('image')->move(public_path('uploads'), $name);
        return view('forms.form3')->with('image', $name);
    }

    public function form4() {
        return view('forms.form4');
    }

    public function form4Submit(FormDataRequest $request) {
        // $request->validate([
        //     // 'name' => 'required|min:4|max:20',
        //     'name' => ['required', 'min:4', 'max:20'],
        //     'age' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        // ]);

        // Validator::make($request->all(), [
        //         // 'name' => 'required|min:4|max:20',
        //         'name' => ['required', 'min:4', 'max:20'],
        //         'age' => 'required',
        //         'email' => 'required',
        //         'phone' => 'required',
        //     ], [
        //         'required' => 'هذا الحقل مطلوب ي روح قلبي',
        //         'min' => 'البيانات المدخلة مش كاملة ي عيني',
        //         'max' => 'ي حبيبي دلعتك كتير البيانات كتيييييرة'
        //     ])->validate();

        return 'done';
    }
}
