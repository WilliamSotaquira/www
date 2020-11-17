<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Asesoría en contabilidad.">

    <title>Y&G CONSULTORES</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/base.js')}}"></script>
    <!-- JQuery  -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- icono -->
    <link rel="icon" href="images/logo.ico" />
    <!-- Identifica el tamaño de la pantalla y el dispositivo huésped -->
    <!-- Hoja de estilos CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/new_style.css')}}">
    <!-- Fuentes de texto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;900&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header" id="inicio">
        @include('navbar_menu')
    </header>

    <!-- CONTENT -->

    <header>
        <div class="container-fluid  bg-white m-0 p-0" style="background-color: #043f83 !important; ">
            <div class="contact">
                <div class="row p-0 m-0">
                    <img src="/images/img_contacto.jpg" style="position: absolute; max-width: 100%; height: auto;" class="img-fluid">
                    <div class="col-sm-8 col-md-6 offset-md-6">
                        <div class="mt-5 pt-5">
                            <div class="jumbotron jumbotron-fluid w-100">
                                <div class="container text-center">
                                    <p class="text-1"><strong>PARA MAYOR</strong></p>
                                    <p class="text-2"><strong>INFORMACIÓN</strong></p>
                                    <p class="">Sobre nuestros servicios, contáctenos:</p>
                                    <p class="font-weight-light">administracion@ygconsultores.co</p>
                                    <p class="font-weight-light">(+57) 608 0844</p>
                                    <hr>
                                    <p class="">Sobre el servicio de facturación electronica</p>
                                    <p class="font-weight-light">
                                        oscar.garzon@facturatech.co
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- END CONTENT -->
    <section>
        <!-- <div id="btn_incial"><a href="{{route('contacto')}}"><img src="{{asset('images/btn_inicial.jpg')}}" width="80%"></a></div> -->
    </section>
    <div>
        @include('footer')
    </div>

    <!-- SCRIPT SCROLLREVEALL -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Scripts Bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>

</html>