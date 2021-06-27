<!DOCTYPE html>
<html>

<head>

<title>Inicio</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="a1">
            <H4 class="border border-success" id="h4"> BASES DE DATOS LARAVEL</H4>
            <h6>Code By: Heymmar Zeledon.</h6>
        </div>
    </div>

    <hr>
    <div class="container">

        <div class="row">

            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/profesor.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Maestros</h5>
                        <p class="card-text"> </p>
                        <center><a href="{{asset('/maestros')}}" class="btn btn-primary">ENTRAR </a></center>
                    </div>
                </div>


            </div>

            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/aulas.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Aulas</h5>
                        <p class="card-text"> </p>
                        <center><a href="{{asset('/aulas')}}" class="btn btn-primary">ENTRAR </a></center>
                    </div>
                </div>


            </div>

            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/clases.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Clases</h5>
                        <p class="card-text"> </p>
                        <center><a href="{{asset('/clases')}}" class="btn btn-primary">ENTRAR </a></center>
                    </div>
                </div>


            </div>



        </div>





    </div>

</body>

</html>