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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- icono -->
    <link rel="icon" href="images/logo.ico" />
    <!-- Identifica el tamaño de la pantalla y el dispositivo huésped -->
    <!-- Hoja de estilos CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/new_style.css')}}">
    <!-- Fuentes de texto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body style="background-color: white;">

    @include('navbar_menu')

    <!-- CONTENT -->
    <section class="clearfix">
        <!-- <div class="container-fluid mt-5" style="height: 100vh; background-color: white; position: absolute;"> -->
        <div class="container-fluid" style="width: 100vw;">


            <div class="row ">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="imgs_servicio p-4"><img src="" id="image" alt="Mujer" width="420vw;"></div>
                </div>
                <div class="col-xs-12 col-md-5 center-block">
                    <span class="clearfix">
                        <div class="mt-md-5 pt-md-5">
                            <span id="ser_titulo"></span>
                            <span id="ser_parrafo"></span>
                        </div>
                        <div class="m-5 d-flex justify-content-center">
                            <a href="#" class="m-2" id="btn_l"><img src="{{asset('/images/btn_left.png')}}" alt="boton_left" width="70vh"></a>
                            <a href="#" class="m-2" id="btn_r"><img src="{{asset('/images/btn_right.png')}}" alt="boton_rigth" width="70vh"></a>
                        </div>
                    </span>

                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- END CONTENT -->

    <div>
        @include('footer')
    </div>

    <!-- SCRIPT SCROLLREVEALL -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Scripts Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>

<script>
    var cont = 0;
    $("#btn_l").hide();

    titulo = [
        '<h1 class="t_service mt-4">Asesoría Contable</h1>',
        '<h1 class="t_service mt-4">ASESORÍA TRIBUTARIA</h1>',
        '<h1 class="t_service mt-4">OUTSOURCING</h1>',
        '<h1 class="t_service mt-4">REVISORÍA FISCAL</h1>',
        '<h1 class="t_service mt-4">ASESORÍA LEGAL Y ADMINISTRATIVA</h1>',
        '<h1 class="t_service mt-4">AUDIOTORÍA GENERAL EXTERNA</h1>',
        '<h1 class="t_service mt-4">INGENIERÍA DE PROCESOS Y SISTEMA DE INFORMACIÓN</h1>',
        '<h1 class="t_service mt-4">NORMAS INTERNACIONALES DE INFORMACIÓN FINANCIERA</h1>'

    ];

    parrafo = [
        '<span><p class="p_service justify-content-center mt-4">Entendemos que la contabilidad es la disciplina que estudia, mide y analiza el patrimonio y la situación económica y financiera de una empresa u organización. Por esto, contamos con un grupo profesional dedicado a planear y organizar su información contable, con el objetivo de facilitar la toma de decisiones empresariales.</p></span>',
        '<span><p class="p_service justify-content-center mt-4">Esta asesoría tributaria busca hacer más rentable la operación de cada cliente, ya que optimiza su estructura, mediante el diseño e implementación de estrategias de planeación y control que determinan el cálculo de obligaciones tributarias para mejorar el flujo de efectivo, minimizando así la carga impositiva y evitando reclamaciones de las autoridades competentes. <br><br>La asesoría que brindamos se complementa con interpretaciones de las leyes tributarias, respuesta a requerimientos y análisis de anexos y soportes de las declaraciones.</p></span>',
        '<span><p class="p_service justify-content-center mt-4">Mediante el servicio de outsourcing contable, organizamos y manejamos directamente el Departamento Contable de su empresa. <br><br> Con esto, buscamos generar valor en las decisiones financieras y gerenciales de nuestros clientes. </p></span>',
        '<span><p class="p_service justify-content-center mt-4">Nosotros, como órganos de fiscalización, nos encargamos de dictaminar los estados financieros, de revisar y evaluar sistemáticamente los componentes y elementos que integran el control interno. Todo esto, de forma oportuna e independiente de acuerdo con las normas de auditoria generalmente aceptadas y en los términos que señale la ley.</p></span>',
        '<span><p class="p_service justify-content-center mt-4">La asesoría legal y administrativa consiste en orientar a nuestros clientes desde la constitución de la sociedad, hasta la implementación de políticas y programas para la organización empresarial, asesoramos la elaboración de manuales de procedimientos y nos anticipamos al efecto de los cambios que se pueden presentar en torno a las necesidades tecnológicas y del mercado. <br><br> El servicio de asesoría de Y & G Consultores, cubre empresas industriales, comerciales y de servicios, de economía solidaria, cooperativas y fondos de empleados y empresas del sector estatal. <br><br> Por otra parte, Y & G Consultores también asesora y realiza liquidación de sociedades.</p></span>',
        '<span><p class="p_service justify-content-center mt-4">Aportamos a la construcción de confianza y aclaramos problemas existentes a través de un examen sistemático de los estados financieros y de los registros y transacciones realizadas, en el cual se analizan y expresan opiniones acerca de:<ul><li class="ml-2"  style="list-style:none; color:gray; font-size: 12px;" >La evidencia sobre la propiedad y custodia de títulos.</li><li class="ml-2"  style="list-style:none; color:gray; font-size: 12px;" >El valor de las trasferencias.</li><li class="ml-2"  style="list-style:none; color:gray; font-size: 12px;" >La constitución de los beneficios que provienen de inversiones.</li><li class="ml-2"  style="list-style:none; color:gray; font-size: 12px;" >La clasificación correcta de las inversiones en los estados financieros.</li><li class="ml-2"  style="list-style:none; color:gray; font-size: 12px;" >El desglose adecuado de las pignoraciones, hipotecas, garantías y otros aspectos relacionados con el valor registrado.</li></ul></p></span>',
        '<span><p class="p_service justify-content-center mt-4">Nuestros especialistas en Ingeniería de Procesos y Sistemas de Información fundamentan el desarrollo empresarial, a través de la optimización de recursos de la empresa en su estructura organizacional, en los circuitos operativos, en los procesos y en su entorno. Diagnosticamos, diseñamos y ponemos en marcha, procesos y sistemas de información, integrándolos a la cadena de valor.<br><br>Y&G Consultores S.A.S. hace de su compañía una organización más eficiente, competitiva y rentable asumiendo en el outsourcing, operaciones y procesos que distraen a la gerencia en actividades que no son el core del negocio.</p></span>',
        '<span><p class="p_service justify-content-center mt-4">Las NIIF corresponden a un conjunto único de normas legalmente exigibles y globalmente aceptadas, que requieren que los estados financieros contengan información comparable, transparente y de alta calidad que ayuden a tomar decisiones económicas.<br><br>Teniendo en cuenta lo anterior, Y&G Consultores asesora en correcta aplicación de estas normas, dentro de los estándares internacionales de acuerdo con el decreto 4946 de 2011.</p</span>>'


    ];

    imagen = [
        '/images/img1.png',
        '/images/img2.png',
        '/images/img3.png',
        '/images/img4.png',
        '/images/img5.png',
        '/images/img6.png',
        '/images/img7.png',
        '/images/img8.png'

    ];


    $('#ser_titulo').append(titulo[cont])
    $('#ser_parrafo').append(parrafo[cont])
    document.getElementById("image").src = imagen[cont];


    $(document).ready(function() {
        $('#btn_r').click(function() {

            cont++;
            validar(cont);

            if (cont >= 0 && cont <= 7) {
                limpiar();
                agregar(cont);
            } else {
                cont = 0;
                limpiar();
                agregar(cont);
            }
        });
    });

    $(document).ready(function() {
        $('#btn_l').click(function() {

            cont--;
            validar(cont);

            if (cont >= 0 && cont <= 6) {
                limpiar();
                eliminar(cont);
            } else {
                cont = 7;
                limpiar();
                eliminar(cont);
            }
        });
    });

    function limpiar() {


        var titulo = document.getElementById("ser_titulo");
        titulo.removeChild(titulo.childNodes[0]);

        var parrafo = document.getElementById("ser_parrafo");
        parrafo.removeChild(parrafo.childNodes[0]);

        document.getElementById("image").src = "";

    }

    function agregar(cont) {

        $('#ser_titulo').append(titulo[cont])
        $('#ser_parrafo').append(parrafo[cont])
        document.getElementById("image").src = imagen[cont];


    }

    function eliminar(cont) {
        $('#ser_titulo').append(titulo[cont])
        $('#ser_parrafo').append(parrafo[cont])
        document.getElementById("image").src = imagen[cont];

    }

    function validar(cont) {

        $("#btn_r").show();
        $("#btn_l").show();

        if (cont === 0) {
            $("#btn_l").hide();
        }
        if (cont === 7) {
            $("#btn_r").hide();

        }

    }
</script>