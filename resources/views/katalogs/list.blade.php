@extends("layout/public")

@section("title")
Katalog list page
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
        <h1 class="fw-bold">Katalog video igara - azuriranje</h1>
        <a href="{{ route('katalog.create') }}" class="btn btn-primary">Nova video igra</a>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($katalozi) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Videoigra</th>
                    <th>Cena</th>
                    <th>Zanr</th>
                    <th>Platforma</th>
                    <th>Slika</th>
                    <th>Datum kreiranja</th>
                    <th>Poslednja izmena</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($katalozi as $katalog)
                    <tr>
                        <td>{{ $katalog->videoigra }}</td>
                        <td>{{ $katalog->cena }}</td>
                        <td>{{ $katalog->zanr->naziv }} </td>
                        <td>{{ $katalog->platforma->naziv }} </td>  
                        <td>
                            <img src="{{ Storage::url($katalog->image) }}" style="width: 100px;" alt="">
                        </td>
                        <td>{{ $katalog->created_at }}</td>
                        <td>{{ $katalog->updated_at }}</td>
                        <td><a href="{{ route('katalog.delete', $katalog->id) }}" class="btn btn-danger">Obrisi</a></td>
                        <td><a href="{{ route('katalog.edit', $katalog->id) }}" class="btn btn-primary">Izmeni</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection