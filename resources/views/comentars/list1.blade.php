@extends("layout/public")

@section("title")
Komentari pregled
@endsection

@section("content")

@if (session("info"))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>  
@endif

@if (session("success"))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>  
@endif

<header class="pb-3 mb-4 border-bottom">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-bold">Komentari video igara - pregled</h1>
    </div>
</header>
<div class="row">
    <div class="col-md-12">
        @if (count($comentari1) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Komentar</th>
                    <th>Videoigra</th>
                    <th>Datum komentara</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comentari1 as $comentar)
                    <tr>
                        <td>{{ $comentar->komentar }}</td>
                        <td>{{ $comentar->katalog->videoigra }}</td> 
                        <td>{{ $comentar->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div> 

@endsection