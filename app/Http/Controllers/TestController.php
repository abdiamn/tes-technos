<?php

namespace App\Http\Controllers;

//import Model "Kategori"
use App\Models\kategori;

//import Model "Data"
use App\Models\data;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(): View
    {
        //get data from table "kategori"
        $kategori = kategori::all();

        //get data from table "data"
        $data = data::all();

        //return view "test" with data
        return view('test', compact('kategori', 'data'));
    }
}
