<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class UserController extends Controller
{
    //
    public function store(ClientRequest $request) {
        // $request()->validate([
        //     'name' => 'required',
        //     'lastname' => 'required',
        //     'mail' => 'required'
        // ]);

        $client = new Client;
        $client->lastname = $request->lastname;
        $client->firstname = $request->firstname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->save();

        return view('layouts.confirm');
    }


    public function show() {
        $data['clients'] = Client::orderBy('id','desc')->paginate(5);
        return view('pages.visualiser', $data);
    }
}
