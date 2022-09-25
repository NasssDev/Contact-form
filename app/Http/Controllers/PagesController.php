<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

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

    public function navTask() {
        $data['tasks'] = Task::orderBy('id','desc')->paginate(10);
        return view('pages.taches', $data);
    }
}
