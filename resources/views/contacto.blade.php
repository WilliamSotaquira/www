@extends ('layouts.base')
@section ('contenido')

<div class="contenedor">

    <section class="contacto">

        <div id="img1"><img src="../www/resourses/img_contacto.jpg" width="100%"></div>


        <header class="body">
        </header>

        <section class="body">
        </section>

        <footer class="body">
        </footer>
        <form method="post" action="index.php">

            <label>Nombre & Apellido</label>
            <input name="name" placeholder="Escribe aquí">

            <label>Correo</label>
            <input name="email" type="email" placeholder="Escribe aquí">

            <label>Mensaje</label>
            <textarea name="message" placeholder="Escribe aquí"></textarea>

            <input id="submit" name="submit" type="submit" value="Enviar">

        </form>



        <footer>
            <div id="txt_foteer">Av. El Dorado Nº 68c-61 Edificio Torre Central <span class="espacio">|</span> Ofc. 831 (+571) 6080844<span class="espacio">|</span> administracion@ygconsultores.com</div>
        </footer>

    </section>

</div>