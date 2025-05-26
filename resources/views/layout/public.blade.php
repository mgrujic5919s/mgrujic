<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield("title")</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="navbar-nav d-flex">
          @if (Auth::check()) 

                @if (Auth::user()->role_id != 1)
                <a class="navbar-brand" href="{{ route('katalog.akcija') }}">GamingStudio</a>
                <a class="navbar-brand" href="{{ route('o-nama') }}">O nama</a>
                <a class="navbar-brand" href="{{ route('katalog.list1') }}">Katalog</a>
                <a class="navbar-brand" href="{{ route('comentari.list') }}">Komentari korisnika</a>
                <a class="navbar-brand" href="{{ route('zanr.list1') }}">Zanrovi</a>
                <a class="navbar-brand" href="{{ route('platforma.list1') }}">Platforme</a>
                <a class="navbar-brand" href="{{ route('kontakt') }}">Kontakt</a>
                @else
                <a class="navbar-brand" href="{{ route('katalog.list') }}">Azuriranje kataloga</a>
                <a class="navbar-brand" href="{{ route('zanr.list') }}">Azuriranje zanrova</a>
                <a class="navbar-brand" href="{{ route('platforma.list') }}">Azuriranje platformi</a>
                <a class="navbar-brand" href="{{ route('comentari.list') }}">Administracija komentara</a>
                @endif

                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                
                <label class="nav-link">*********************** Prijavljeni korisnik:</label>   
                <label class="nav-link"><b>{{ Auth::user()->name }}</b></label>
                
          @else 
            <a class="navbar-brand" href="{{ route('katalog.akcija') }}">GamingStudio</a>
            <a class="navbar-brand" href="{{ route('katalog.list1') }}">Katalog-pregled</a>
            <a class="navbar-brand" href="{{ route('comentari.list1') }}">Komentari-pregled</a>
            <a class="navbar-brand" href="{{ route('zanr.list1') }}">Zanrovi-pregled</a>
            <a class="navbar-brand" href="{{ route('platforma.list1') }}">Platforme-pregled</a>
            <a class="navbar-brand" href="{{ route('o-nama') }}">O nama</a>
            <a class="navbar-brand" href="{{ route('kontakt') }}">Kontakt</a>
            <a class="nav-link" href="{{ route('register') }}">Registracija</a>
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          @endif
        </div>
      </div>
    </nav>
    
    <div class="container py-4">
        @yield("content")
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



