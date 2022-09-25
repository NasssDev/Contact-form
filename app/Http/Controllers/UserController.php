<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\TaskRequest;
use App\Models\Client;
use App\Models\Task;

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
        $client->message = $request->message;
        $client->save();

        return view('layouts.confirm');
    }

    public function show() {
        $data['clients'] = Client::orderBy('id','desc')->paginate(5);
        return view('pages.visualiser', $data);
    }

    public function saveTask(TaskRequest $request) {
        $task = new Task;
        $task->task = $request->task;
        $task->save();
        return redirect('/taches');
    }

    public function destroy($task_id) {
        $task = Task::find($task_id)->delete();
        return redirect('/taches')->with('message','Deleted successfully');
    }
}
