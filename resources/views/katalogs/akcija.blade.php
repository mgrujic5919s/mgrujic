@extends("layout.public")

@section("title")
Akcijska ponuda
@endsection

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


@section("content")
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <img src="{{ asset('images/totalnarasprodaja.jpg') }}" alt="">
        </div>

        <!-- <div class="item">
        <img src="{{ asset('images/acs.jpg') }}" alt="Chicago">
        </div>

        <div class="item">
        <iimg src="{{ asset('images/fifa.jpg') }}" alt="New York">
        </div> -->
    </div>

    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div> -->

    <hr>
    <div>
        <h1 class="text-center">Akcija - Ponuda meseca!</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (count($katalozi1) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Videoigra</th>
                        <th>Cena</th>
                        <th>Zanr</th>
                        <th>Datum kreiranja</th>
                        <th>Poslednja izmena</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($katalozi1 as $katalog)
                        <tr>
                            <td>{{ $katalog->videoigra }}</td>
                            <td>{{ $katalog->cena }}</td>
                            <td>{{ $katalog->zanr->naziv }} </td> 
                            <td>{{ $katalog->created_at }}</td>
                            <td>{{ $katalog->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>



    <hr>
    <footer class="text-center">
        Marko Grujic, s59/19
    </footer>

@endsection


