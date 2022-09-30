@extends('layouts.app')

@section('contenu')
    <h1>Contactez-nous via ce formulaire</h1>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Formulaire de contact:</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/Nasss/formulContact/public"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('addMessage') }}" method="POST">
            @csrf
            <div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <div class="form-group">
                        <strong>Prenom:</strong>
                        <input type="text" name="lastname" class="form-control" placeholder="Nom"
                            value="{{ old('lastname') }}">
                        @error('lastname')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <input type="text" name="firstname" class="form-control" placeholder="Prenom"
                            value="{{ old('frstname') }}">
                        @error('firstname')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <div class="form-group">
                        <strong>Mail:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Mail"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <div class="form-group">
                        <strong>Telephone:</strong>
                        <input type="text" name="phone" class="form-control" placeholder="Telephone"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <div class="form-group">
                        <strong>Adresse:</strong>
                        <input type="text" name="address" class="form-control" placeholder="Adresse"
                            value="{{ old('address') }}"
                            @error('address')
                        <div class="alert alert-danger mt-1 mb-1"> {{ $message }}</div>
                        @enderror
                            </div>
                    </div>

                    <div class="d-grid gap-2 col-12 mx-auto">
                        <div class="form-group">
                            <strong>Message:</strong>
                            <textarea style="height: 15vh" type="text" name="message" class="form-control" placeholder="Ecrivez votre message..."
                                rows="10">{{ old('lastname') }}</textarea>
                            @error('message')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>


        </form>
    </div>
@endsection
