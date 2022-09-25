@extends('layouts.app')

@section('contenu')
<div class="panel-body">
    <!-- Display Validation Errors -->
    {{-- @include('common.errors') --}}

    <!-- New Task Form -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        @csrf
        <!-- Task Name -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <label for="task" class="form-label">Ajoutez des taches !</label>
                <input type="text" name="task" id="task-name" class="form-control" >
                @error('task')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-success ml-3">Ajouter taches</button>
            </div>
        <!-- Add Task Button -->
    </form>
</div>
    @if (isset($tasks))
    <h1>Taches à accomplir</h1>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>N° tache</th>
                    <th>Tache</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task}}</td>
                    <td>
                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>
    @endif
<!-- TODO: Current Tasks -->
@endsection