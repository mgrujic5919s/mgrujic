@extends("layout/public")

@section("title")
Zanr list page
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
        <h1 class="fw-bold">Zanrovi video igara - azuriranje</h1>
        <a href="{{ route('zanr.create') }}" class="btn btn-primary">Novi zanr</a>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($zanrovi) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Zanr</th>
                    <th>Opis</th>
                    <th>Datum kreiranja</th>
                    <th>Poslednja izmena</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($zanrovi as $zanr)
                    <tr>
                        <td>{{ $zanr->naziv }}</td>
                        <td>{{ $zanr->opis }}</td>
                        <td>{{ $zanr->created_at }}</td>
                        <td>{{ $zanr->updated_at }}</td>
                        <td><a href="{{ route('zanr.delete', $zanr->id) }}" class="btn btn-danger">Obrisi</a></td>
                        <td><a href="{{ route('zanr.edit', $zanr->id) }}" class="btn btn-primary">Izmeni</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection