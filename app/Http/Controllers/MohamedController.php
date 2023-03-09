<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MohamedController extends Controller
{
    function index()
    {
        return view('Mohamed.index');
    }
    function show()
    {
        return view('Mohamed.show');
    }
    function create()
    {
        return view('Mohamed.create');
    }
    function edit()
    {
        return view('Mohamed.edit');
    }
}
