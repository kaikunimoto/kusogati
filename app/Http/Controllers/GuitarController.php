<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guitar;

class GuitarController extends Controller
{
    public function index()
    {
        $guitar = new Guitar();
        $guitars = $guitar->getList();
        return view('guitars', ['guitars' => $guitars]);
    }

    public function showInfo(Request $request)
    {
        $guitar = $request->all();
        return view('info', $guitar);
    }
}
