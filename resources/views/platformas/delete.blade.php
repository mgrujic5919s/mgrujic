@extends("layout/public")

@section("title")
Provera za brisanje platforme
@endsection

<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Brisanje platforme: <b>{{ $platforma->naziv }}</b> </h5>
            </div>
            <div class="card-body">
                <p>Da li ste sigurni da zelite da obrisete ovu platformu?</p>
                <form action="{{ route('platforma.delete', $id) }}" method="post">
                    @csrf 
                    <button type="submit" class="btn btn-danger">Obrisi platformu</button>
                    <a href="{{ route('platforma.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>



