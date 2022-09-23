@extends('layouts.app')

@section('contenu')
        <h1>Visualisez les différents message</h1>
        @if (isset($clients))
        <table class="table table-dark table-striped">
                <thead>
                        <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Adresse</th>
                                <th>Message</th>
                        </tr>
                </thead>
                <tbody>
                @foreach ($clients as $client)
                        <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->lastname}}</td>
                                <td>{{$client->firstname}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->message}}</td>
                        </tr>
                @endforeach
                </tbody>
        </table>
        @endif
@endsection