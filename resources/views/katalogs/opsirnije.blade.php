@extends("layout/public")

@section("title")
Katalog Opsirnije
@endsection

@section("content")

@if (session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<header class="pb-3 mb-4 border-bottom">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-bold">Detaljnije o video igri</h1>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="GET">
                    @csrf
                    <div class="mb-3">
                        <label for=""><b>Videoigra: </b></label>
                        {{ $katalog->videoigra }}
                    </div>
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $katalog->image) }}" style="width: 100px;" alt="">
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Cena: </b></label>
                        {{ $katalog->cena }}
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Zanr videoigre: </b></label>
                        {{ $katalog->zanr->naziv }}
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Platforma videoigre: </b></label>
                        {{ $katalog->platforma->naziv }}
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Datum kreiranja: </b></label>
                        {{ $katalog->created_at }}
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Poslednja izmena: </b></label>
                        {{ $katalog->updated_at }}
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('katalog.list1') }}" class="btn btn-primary">Povratak na katalog</a>
                    </div>
                                        
                </form>
            </div>
        </div>
    </div>
</div>

@endsection




