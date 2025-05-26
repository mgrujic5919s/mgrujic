@extends("layout/public")

@section("title")
Komentari List stranica
@endsection

@section("content")

@if (session("info"))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>  
@endif

@if (session("success"))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>  
@endif

<header class="pb-3 mb-4 border-bottom">
    <div class="d-flex justify-content-between align-items-center">
        @if ((Auth::check()) and (Auth::user()->role_id == 2))
            <h1 class="fw-bold">Komentari video igara - azuriranje</h1>
            <a href="{{ route('comentari.create') }}" class="btn btn-primary">Novi komentar</a>
        @endif
        @if ((Auth::check()) and (Auth::user()->role_id != 2))
            <h1 class="fw-bold">Komentari video igara - brisanje neprimerenih komentara</h1>
        @endif
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($comentari) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Komentar</th>
                    <th>Videoigra</th>
                    <th>Datum komentara</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comentari as $comentar)
                    <tr>
                        <td>{{ $comentar->komentar }}</td>
                        <td>{{ $comentar->katalog->videoigra }}</td> 
                        <td>{{ $comentar->created_at }}</td>
                        <td><a href="{{ route('comentar.delete', $comentar->id) }}" class="btn btn-danger">Obrisi</a></td> 
                        @if ((Auth::check()) and (Auth::user()->role_id == 2))
                            <td><a href="{{ route('comentar.edit', $comentar->id) }}" class="btn btn-primary">Izmeni</a></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div> 

@endsection