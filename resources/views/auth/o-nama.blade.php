@extends("layout.public")

@section("title")
O nama
@endsection

@section("content")
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="{{ asset('images/ponuda.jpg') }}" alt="">           
            </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="{{ asset('images/prodavnica.jpg') }}" alt="">  
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- <img…. > -->
                <h3> O nama </h3>
                <p>
                    <b>GAMING STUDIO</b> je lanac prodavnica video igara, društvenih igara, igračkih konzola, PC računara i prateće opreme za gejmere. Pored osnovnog programa za igrače, GAME STUDIO nudi širok izbor artikala vezanih za e-sports – gaming tastature, slušalice, miševe, podloge i drugu prateću opremu. Naše prodavnice se nalaze na 4 lokacije u Srbiji: Beograd - Knez Mihaila 6 (Centar) i Žička 20 (Vračar), Novi Beograd - Tošin bunar 181 i u Novom Sadu, Danila Kiša 14.
                Naš moto je: No Limits, Just Play!
                </p>
            </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Nasa ponuda</h3>
                <p> U ponudi <b>GAMING STUDIO</b> prodavnica se nalazi najveći izbor popularnih video igara, konzola za gejmere, fantastičnih gaming PC računara i prateće opreme najjačih brendova, kao što su: Sony PlayStation 5, PS4, Microsoft XBOX, Nintendo Switch... Tu je i sjajna ponuda društvenih igara za sve uzraste. Gaming kao fokusna industrija definiše i ostatak asortimana u GAME STUDIO prodavnicama prateći program sa gaming tematikom: akcione figure, Funko POP!, privesci, kape, šolje, torbe, rančevi...
                </p>
            </div>
        </div>
        </div>
    <hr>
    <footer class="text-center">
        Marko Grujic, s59/19
    </footer>

@endsection