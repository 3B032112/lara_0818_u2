<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['name' => 'everybody'];
        return view('home.index');
    }
}
