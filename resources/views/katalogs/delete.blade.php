@extends("layout/public")

@section("title")
Provera za brisanje videoigre
@endsection

<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Brisanje videoigre: <b>{{ $katalog->videoigra }}</b> </h5>
            </div>
            <div class="card-body">
                <p>Da li ste sigurni da zelite da obrisete ovu videoigru?</p>
                <form action="{{ route('katalog.delete', $id) }}" method="post">
                    @csrf 
                    <button type="submit" class="btn btn-danger">Obrisi videoigru</button>
                    <a href="{{ route('katalog.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>



