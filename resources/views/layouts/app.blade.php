<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kalité</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand" href="{{ url('/') }}">Kali and co</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('homeLink') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('showListLink') }}">Récap messages</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('taskLink') }}">Taches</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('formMessageLink') }}">Apropos</a></li>
            </ul>
            {{-- <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Nouveau produit</a></li>
            </ul> --}}

        </div>
    </nav>
    <div class="container">
        @yield('contenu')
    </div>

</body>

</html>
