@extends("layout/public")

@section("title")
Platforme Create Stranica
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
                        <label for="">Platforma</label>
                        <input type="text" class="form-control" name="naziv">
                    </div>
                    <div class="mb-3">
                        <label for="">Opis</label>
                        <input type="text" class="form-control" name="opis">
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj novu platformu</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection