<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    //
    public function homee() {
        return view('pages.home');
    }

    public function aproposs() {
        return view('pages.apropos');
    }

    public function servicess() {
        return view('pages.services');
    }
}
