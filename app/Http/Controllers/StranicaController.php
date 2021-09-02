<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StranicaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function dogadjaji()
    {
        return view('dogadjaji');
    }
    public function putovanja()
    {
        return view('putovanja');
    }
}
