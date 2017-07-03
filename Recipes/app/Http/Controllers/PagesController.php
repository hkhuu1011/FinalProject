<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function search(){
        $title = 'Search Form';
        return view('pages.search')->with('title', $title);
    }

    public function results(){
        $title = 'Search Results';
        return view('pages.results')->with('title', $title);
    }

    public function saved(){
        $title = 'Saved Results';
        return view('pages.saved')->with('title', $title);
    }
}
