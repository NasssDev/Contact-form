<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class PagesController extends Controller
{
    //
    public function home() {
        return view('pages.home');
    }

    public function create() {
        return view('pages.apropos');
    }

    public function visualiser() {
        return view('pages.visualiser');
    }
}
