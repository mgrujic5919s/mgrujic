@extends("layout/public")

@section("title")
Platforma list page
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
        <h1 class="fw-bold">Platforme video igara - azuriranje</h1>
        <a href="{{ route('platforma.create') }}" class="btn btn-primary">Nova platforma</a>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($platforme) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Platforma</th>
                    <th>Opis</th>
                    <th>Datum kreiranja</th>
                    <th>Poslednja izmena</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($platforme as $platforma)
                    <tr>
                        <td>{{ $platforma->naziv }}</td>
                        <td>{{ $platforma->opis }}</td>
                        <td>{{ $platforma->created_at }}</td>
                        <td>{{ $platforma->updated_at }}</td>
                        <td><a href="{{ route('platforma.delete', $platforma->id) }}" class="btn btn-danger">Obrisi</a></td>
                        <td><a href="{{ route('platforma.edit', $platforma->id) }}" class="btn btn-primary">Izmeni</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection