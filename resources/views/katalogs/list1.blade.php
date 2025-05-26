@extends("layout/public")

@section("title")
Katalog pregled
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
        <h1 class="fw-bold">Katalog video igara - pregled</h1>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($katalozi1) > 0)
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
                </tr>
            </thead>
            <tbody>
                @foreach($katalozi1 as $katalog)
                    <tr>
                        <td>{{ $katalog->videoigra }}</td>
                        <td>{{ $katalog->cena }}</td>
                        <td>{{ $katalog->zanr->naziv }} </td> 
                        <td>{{ $katalog->platforma->naziv }} </td> 
                        <td>
                            <img src="{{ asset('storage/' . $katalog->image) }}" style="width: 100px;" alt="">
                        </td>
                        <td>{{ $katalog->created_at }}</td>
                        <td>{{ $katalog->updated_at }}</td>
                        <td><a href="{{ route('katalog.opsirnije', $katalog->id) }}" class="btn btn-primary">Opsirnije</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection