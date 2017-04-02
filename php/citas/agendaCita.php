<h2>Agenda una cita</h2>
<div id="col1">
    <script>
        function horario1()
        {
            var elemento = document.getElementById("horario1");
            elemento.className ="reservado";
        }

        function horario2()
        {
            var elemento = document.getElementById("horario2");
            elemento.className ="reservado";
        }

        function horario3()
        {
            var elemento = document.getElementById("horario3");
            elemento.className ="reservado";
        }

        function horario4()
        {
            var elemento = document.getElementById("horario4");
            elemento.className ="reservado";
        }

        function horario5()
        {
            var elemento = document.getElementById("horario5");
            elemento.className ="reservado";
        }

        function horario6()
        {
            var elemento = document.getElementById("horario6");
            elemento.className ="reservado";
        }

        function horario7()
        {
            var elemento = document.getElementById("horario7");
            elemento.className ="reservado";
        }

        function horario8()
        {
            var elemento = document.getElementById("horario8");
            elemento.className ="reservado";
        }

        function horario9()
        {
            var elemento = document.getElementById("horario9");
            elemento.className ="reservado";
        }

        function horario10()
        {
            var elemento = document.getElementById("horario10");
            elemento.className ="reservado";
        }

        function horario11()
        {
            var elemento = document.getElementById("horario11");
            elemento.className ="reservado";
        }
        function horario12()
        {
            var elemento = document.getElementById("horario12");
            elemento.className ="reservado";
        }
        function horario13()
        {
            var elemento = document.getElementById("horario13");
            elemento.className ="reservado";
        }
        function horario14()
        {
            var elemento = document.getElementById("horario14");
            elemento.className ="reservado";
        }
    </script>
    <h3>Paso 1: Selecciona una fecha</h3>
    <?php
        date_default_timezone_set('America/Mazatlan');
        //asignamos a una variable la fecha actual
        $fecha_sistema=date('Y-m-d');
        //para agendar cita se debera tener como fecha minima 3 dias despues del dia actual
        //y  no despues de 1 mes del dia actual
        //establecemos la fecha minima con 4 dias a partir del dia actual
        $fecha_min=date('Y-m-d', strtotime('+2 days', strtotime($fecha_sistema)));
        //establecemos la fecha maxima con 1 mes a partir del dia actual
        $fecha_max = date('Y-m-d', strtotime('+1 month', strtotime($fecha_sistema)));
    ?>
    <form id='formFecha'>
        <input type="date" name="fecha" min="<?php echo  $fecha_min; ?>" max="<?php echo $fecha_max;   ?>";  required>
        <input type="submit">
    </form>
</div>
<div id="col2">
    <h3>Paso 2: Selecciona una hora</h3>
    <div id="notacion">
        <article id="notaAzul"><h3>Disponible</h3></article>
        <div id="bloqueAzul"></div>
    </div>
    <div id="notacion">
        <article id="notaGris"><h3>No disponible</h3></article>
        <div id="bloqueGris"></div>
    </div>
    <table>
        <tr><th>Dentista: Dalia Lopez </th></tr>
        <tr><td id="horario1" onclick="agendaCita(1)">10:00-10:30</td></tr>
        <tr><td id="horario2" onclick="agendaCita(2)">10:30-11:00</td></tr>
        <tr><td id="horario3" onclick="agendaCita(3)">11:00-11:30</td></tr>
        <tr><td id="horario4" onclick="agendaCita(4)">11:30-12:00</td></tr>
        <tr><td id="horario5" onclick="agendaCita(5)">12:00-12:30</td></tr>
        <tr><td id="horario6" onclick="agendaCita(6)">12:30-13:00</td></tr>
    </table>

    <table>
        <tr><th>Dentista: Luis Galaviz </th></tr>
        <tr><td id="horario7" onclick="agendaCita(7)">15:00-15:30</td></tr>
        <tr><td id="horario8" onclick="agendaCita(8)">15:30-16:00</td></tr>
        <tr><td id="horario9" onclick="agendaCita(9)">16:00-16:30</td></tr>
        <tr><td id="horario10" onclick="agendaCita(10)">16:30-17:00</td></tr>
        <tr><td id="horario11" onclick="agendaCita(11)">17:00-17:30</td></tr>
        <tr><td id="horario12" onclick="agendaCita(12)">17:30-18:00</td></tr>
        <tr><td id="horario13" onclick="agendaCita(13)">18:00-18:30</td></tr>
        <tr><td id="horario14" onclick="agendaCita(14)">18:30-19:00</td></tr>
    </table>
</div>
