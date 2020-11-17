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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header" id="inicio">
        <div>
            @include('navbar_menu')
        </div>
    </header>


    <!-- CONTENT -->
    <section>
        <header>
            <div id="banner"><img src="{{asset('images/banner2.jpg')}}" width="100%" margin-top:2%></div>
        </header>
    </section>
    <div class="container-fluid ">
        <div class="row pb-5" style="background-color: white">
            <div class="col-md-10 offset-md-2 pt-5 pb-4">
                <div class="pl-4 pb-0">
                    <div id="txt1"><span class=" font-weight-bold text-uppercase font-italic">somos Y&G consultores,</span></div>
                    <div id="txt2"><span class="font-weight-normal">el aliado para tomar sus mejores decisiones gerenciales.</span>
                    </div>
                </div>
                <div id="txt3" class="col-12 vl pl-5 pb-2">
                    <p> <strong>Asesoramos</strong> para crear un mejor ecosistema empresarial y financiero para los negocios. <br><br>Y&G consultores nace en 1994 y a ha estado operando y haciendo parte del mercado de <strong>la asesoría y la consultoría</strong> de empresas de los diferentes sectores económicos del país desde el año 1985. <br><br>
                        Durante esta trayectoria Y&G se ha comprometido con brindar los mejores <strong> servicios</strong> en los ámbitos contables, fiscales, tributarios y legales, asumiendo un gran compromiso tanto con sus clientes como con el país.<br><br>
                        Y&G se ha consolidado bajo altos estándares de <strong>calidad</strong> y servicio, y ha crecido junto con su gran equipo humano, profesionales expertos en las áreas contables, económicas y jurídicas, logrando un excelente posicionamiento en la industria contable y de los negocios.
                    </p>
                </div>
            </div>
        </div>
        <div class="row bg-white pt-4 pb-5 mb-4">
            <div class="col-sm-6">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <img class="pb-3" src="{{asset('images/icono1.png')}}" width="70px">
                            <h6 class="title text-uppercase">misión</h6>
                            <div class="container" style="width: 70%;">
                                <p class="inter text-justify">
                                    Asesorar a empresas de distintas industrias en temas contables,
                                    fiscales, tributarios y legales para mejorar y potencializar sus decisiones
                                    financieras y gerenciales mediante un gran equipo profesional e infraestructura tecnológica,
                                    lo cual permite agregar valor a nuestros clientes a través de soluciones innovadoras y de alta calidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <img class="pb-3" src="{{asset('images/icono3.png')}}" width="40px">
                            <h6 class="title text-uppercase">visión</h6>
                            <div class="container" style="width: 70%;">
                                <p class="inter text-justify">
                                    Para el año 2025 ser una de las cinco firmas de consultoría más acertada, reconocida y recomendada, caracterizada por su alta calidad, credibilidad y compromiso con el ecosistema empresarial y del país.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 pl-5 pr-5">
                <div class="col-sm-12 col-md-8">
                    <div class="form-group mb-5">
                        <div class="row justify-content-center">
                            <img src="{{asset('images/icono2.png')}}" class="mb-2" width="90px">
                        </div>
                        <h6 class="title text-uppercase form-group">nuestros valores</h6>
                        <p class=" inter text-justify form-group">
                            Queremos que cada una de nuestras acciones esté ejecutada bajo los siguientes valores:
                        </p>
                    </div>
                    <div class="form-group ">
                        <h6 class="title_2 text-uppercase form-group">ética</h6>
                        <p class="inter text-justify form-group">
                            Actuamos con responsabilidad, lealtad y honestidad, manteniendo la ética, la honradez, el profesionalismo y la confiabilidad en la conducción de sus negocios, respondiendo moral y legalmente.
                        </p>
                    </div>
                    <div class="form-group">
                        <h6 class="title_2 text-uppercase form-group">liderazgo</h6>
                        <p class="inter text-justify form-group">
                            Somos apasionados por los resultados que generan valor, por lo cual nos caracterizamos por ser profesionales autónomos, por tomar riesgos y por ser proactivos. deseamos emprender nuevos desafíos y lograrlos, superando las expectativas del cliente.
                        </p>
                    </div>
                    <div class="form-group mb-5">
                        <h6 class="title_2 text-uppercase">transparencia</h6>
                        <p class="inter text-justify">
                            Sinceridad y respeto son las bases fundamentales de nuestro trabajo. cada situación es analizada y tratada de forma directa y estrictamente confidencial.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-blue h-80 pt-5 contenedor-ed">
        <div class="row">
            <div class="col-sm-12 col-lg-6 mb-4" style="height: 60vh;">
                <img src="{{asset('images/edificio.png')}}" alt="edificio" style="height: 90vh;" id="edificio">
            </div>
            <div class="col-sm-12 col-lg-6">

                <div class="row blanco inter-white pt-4">
                    <div class=" col-md-8">

                        <h6 class="text-uppercase title-blue row mb-3 ml-1">Por qué Y&G</h6>


                        <span>
                            En Y&G Consultores estamos seguros de que nuestros clientes contarán con una asesoría y consultoría profesional, caracterizada por los siguientes aspectos:
                        </span>

                        <ul class="pt-3">
                            <li>Talento humano y atención personalizada</li>
                            <li>Experiencia, trayectoria y know how</li>
                            <li>Metodología ágil de trabajo</li>
                            <li>Recursos tecnológicos</li>
                            <li>Proyecciones y planes futuros </li>

                        </ul>
                        Estamos comprometidos con el trabajo de calidad y con la generación de valor hacia nuestros clientes, por lo que tenemos amplio conocimiento en cada una de las industrias, lo cual permite generar seguridad y confianza pública.
                    </div>

                </div>


            </div>
        </div>

    </div>

    </div>
    </div>


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

