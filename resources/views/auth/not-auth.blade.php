@extends("layout.public")

@section("title")
Not Auth
@endsection

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Nemate autentifikaciju za pristup!</h1>
                        <!-- <h1>Vi ste korisnik: {{ Auth::user()->name }} sa rolom: {{ Auth::user()->role_id }}</h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


