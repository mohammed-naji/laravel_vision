<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativeController extends Controller
{
    public function index() {

        $projects = [
            [
                'id' => 1,
                'name' => 'project1',
                'image' => '1.jpg',
                'category' => 'Design'
            ],
            [
                'id' => 2,
                'name' => 'project2',
                'image' => '2.jpg',
                'category' => 'Code'
            ],
            [
                'id' => 3,
                'name' => 'project3',
                'image' => '3.jpg',
                'category' => 'Art'
            ]
        ];

        return view('creative.index')->with('projects', $projects);
    }
}
