@extends("layout/public")

@section("title")
Provera za brisanje zanra
@endsection

<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Brisanje zanra: <b>{{ $zanr->naziv }}</b> </h5>
            </div>
            <div class="card-body">
                <p>Da li ste sigurni da zelite da obrisete ovaj zanr?</p>
                <form action="{{ route('zanr.delete', $id) }}" method="post">
                    @csrf 
                    <button type="submit" class="btn btn-danger">Obrisi zanr</button>
                    <a href="{{ route('zanr.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>



