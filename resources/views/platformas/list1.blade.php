@extends("layout/public")

@section("title")
Platforme pregled
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
        <h1 class="fw-bold">Platforme video igara - pregled</h1>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($platforme1) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Platforma</th>
                    <th>Opis</th>
                    <th>Datum kreiranja</th>
                    <th>Poslednja izmena</th>
                </tr>
            </thead>
            <tbody>
                @foreach($platforme1 as $platforma)
                    <tr>
                        <td>{{ $platforma->naziv }}</td>
                        <td>{{ $platforma->opis }}</td>
                        <td>{{ $platforma->created_at }}</td>
                        <td>{{ $platforma->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection