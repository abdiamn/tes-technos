<?php

namespace App\Http\Controllers;

//import Model kategori
use App\Models\kategori;

//import Model "data
use App\Models\data;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(): view
    {
        //get data from table kategori
        $kategori = kategori::all();

        //get data from table data
        $data = data::all();

        //return view test.blade.php
        return view('test', compact('kategori', 'data'));
    }
}
