<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function search(){
        return view('pages.search');
    }

    public function results(){
        return view('pages.results');
    }

    public function saved(){
        return view('pages.saved');
    }
}
