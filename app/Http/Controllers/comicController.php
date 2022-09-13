<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class comicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('index', compact('comics'));
    }
}

