<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #043f83 !important">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">

        <ul class="navbar-nav m-auto d-flex align-items-end">

            <div class="order-sm-4 navbar-tabs d-none d-lg-block">
                <li class="nav-item">
                    <div class="p-1">
                        <a href="/"><img src="{{asset('images/yg_blanco.png')}}" class="float-rigth mx-auto w-100"></a>
                    </div>
                </li>
            </div>
            <div class="order-sm-1 navbar-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('somos')}}">Quiénes somos</a>
                </li>
            </div>
            <div class="order-sm-2 navbar-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicio')}}">Servicios</a>
                </li>
            </div>
            <div class="order-sm-3 navbar-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alianza')}}">Alianzas</a>
                </li>
            </div>
            <div class="order-sm-5 navbar-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('documento')}}">Documentos</a>
                </li>
            </div>
            <div class="order-sm-6 navbar-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cliente')}}">Clientes</a>
                </li>
            </div>
            <div class="order-sm-7 navbar-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto')}}">Contacto</a>
                </li>
            </div>
        </ul>
    </div>
</nav>