@extends("layout/public")

@section("title")
Katalog Edit Stranica
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
                    <!-- ispod taga za formu dodati sledeci tag / element -->
                    @csrf
                    <div class="mb-3">
                        <label for="">Videoigra</label>
                        <input type="text" value="{{ $katalog->videoigra }}" class="form-control" name="videoigra">
                    </div>
                    <div class="mb-3">
                        <label for="">Cena</label>
                        <input type="number" value="{{ $katalog->cena }}" class="form-control" name="cena">
                    </div>
                    <div class="mb-3">
                        <label for="">Izaberite zanr videoigre</label>
                        <select name="zanr_id" class="form-control">
                            @foreach($zanrovi1 as $zanr) 
                                <option value="{{ $zanr->id }}">{{ $zanr->naziv }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Izaberite platformu videoigre</label>
                        <select name="platforma_id" class="form-control">
                            @foreach($platforme1 as $platforma) 
                                <option value="{{ $platforma->id }}">{{ $platforma->naziv }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Izmeni videoigru</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection




