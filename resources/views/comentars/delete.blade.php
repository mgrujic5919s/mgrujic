@extends("layout/public")

@section("title")
Provera za brisanje komentara
@endsection

<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Brisanje komentara: <b>{{ $comentar->komentar }}</b> </h5>
            </div>
            <div class="card-body">
                <p>Da li ste sigurni da zelite da obrisete ovaj komentar?</p>
                <form action="{{ route('comentar.delete', $id) }}" method="post">
                    @csrf 
                    <button type="submit" class="btn btn-danger">Obrisi komentar</button>
                    <a href="{{ route('comentari.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>