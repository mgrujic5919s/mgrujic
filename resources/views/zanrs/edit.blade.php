@extends("layout/public")

@section("title")
Zanr Edit Stranica
@endsection

@section("content")

@if (session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <!-- ispod taga za formu dodajemo csrf tag  -->
                    @csrf
                    <div class="mb-3">
                        <label for="">Zanr</label>
                        <input type="text" value="{{ $zanr->naziv }}" class="form-control" name="naziv">
                    </div>
                    <div class="mb-3">
                        <label for="">Opis</label>
                        <input type="text" value="{{ $zanr->opis }}" class="form-control" name="opis">
                    </div>
                    <button type="submit" class="btn btn-primary">Izmeni zanr</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection