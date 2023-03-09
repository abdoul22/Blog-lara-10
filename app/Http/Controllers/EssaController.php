<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EssaController extends Controller
{
    function index(){
        return view('Essa.index');
    }
    function show()
    {
        return view('Essa.show');
    }
    function create()
    {
        return view('Essa.create');
    }
    function edit()
    {
        return view('Essa.edit');
    }
}
