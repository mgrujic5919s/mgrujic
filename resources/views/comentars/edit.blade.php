@extends("layout/public")

@section("title")
Komentari Edit Stranica
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
                        <label for="">Izmeni sadrzaj komentara za videoigru pod rednim brojem {{ $comentar->katalog_id }}: {{ $comentar->katalog->videoigra }}</label>
                        <input type="number" value="{{ $comentar->katalog_id }}" class="form-control" name="katalog_id">
                    </div>

                    <div class="mb-3">
                        <textarea name="komentar" rows="10" class="form-control">{{ $comentar->komentar }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Izmeni komentar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



<!-- <div class="mb-3">
    <label for="">Videoigra</label>
    <input type="text" value="{{ $comentar->katalog_id }}" class="form-control" name="katalog_id">
</div>
<div class="mb-3">
    <label for="">Komentar</label>
    <input type="text" value="{{ $comentar->komentar }}" class="form-control" name="komentar">
</div> -->