@extends("layout/public")

@section("title")
Katalog Create Stranica
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
            <!-- enctype za slanje fajlova kroz formu, dodavanje slika -->
            <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Videoigra</label>
                        <input type="text" class="form-control" name="videoigra">
                    </div>
                    <div class="mb-3">
                        <label for="">Cena</label>
                        <input type="number" class="form-control" name="cena">
                    </div>
                    <div class="mb-3">
                        <label for="">Izaberite zanr videoigre</label>
                        <select name="zanr_id" class="form-control">
                            @foreach($zanrovi as $zanr) 
                                <option value="{{ $zanr->id }}">{{ $zanr->naziv }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Izaberite platformu videoigre</label>
                        <select name="platforma_id" class="form-control">
                            @foreach($platforme as $platforma) 
                                <option value="{{ $platforma->id }}">{{ $platforma->naziv }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Dodaj videoigru</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection