<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;

class PageController extends Controller
{
    public function home(){
        return view('index');

    }

    public function form(){
        return view('form');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
