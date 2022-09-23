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
    <nav class="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Kali and co</a>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/visualiser')}}">Récap messages</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/taches')}}">Taches à accomplir</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/apropos')}}">Apropos</a></li>
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