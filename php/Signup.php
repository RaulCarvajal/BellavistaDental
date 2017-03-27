<!DOCTYPE html>
<head>
    <title>Bellavista-Dental Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="../css/styleSignup.css">
    <link rel="stylesheet" type="text/css"  href="../css/w3css.css">
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body background="../IMG/fondoindx.jpg">
    <div id="div1" class="col-md-6 col-md-offset-3 w3-border divP">
        <div class="w3-container w3-blue margenArriba ">
            <h1 class="text-center">Regristo a nuevo usario</h1>
        </div>
        <div id="cont">
            <form class="w3-container" method="post" action="controladores/ControlRegistroUsuarioPaciente.php">

                <label class="w3-label w3-text-blue"><b><h3>Nombre de usuario</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="txtuser" required >

                <label class="w3-label w3-text-blue"><b><h3>Contraseña</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="password" name="txtcontrasena" required>

                <label class="w3-label w3-text-blue"><b><h3>Nombre/s</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="txtnombrepac" required>

                <label class="w3-label w3-text-blue"><b><h3>Apellido</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="txtapellido" required>


                <label class="w3-label w3-text-blue"><b><h3>Correo electronico</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="email" name="txtcorreo" required>

                <label class="w3-label w3-text-blue"><b><h3>Telefono(Con lada)</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="txttelefono" required>

                <label class="w3-label w3-text-blue"><b><h3>Fecha de nacimiento</h3></b></label>
                <input class="w3-input w3-border w3-light-grey" type="date" name="txtfecnac" required>

                <label class="w3-label w3-text-blue"><b><h3>Sexo</h3></b></label>
                <select required class="cmb" name="sexo">
                    <option value="">Seleccionar uno</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select><br>

                <input class="w3-btn w3-blue-grey margenArriba" type="submit" name="Enviar" value="Regristrarse">
                <input class="w3-btn w3-blue-grey margenArriba margenLateral" type="reset">
            </form>
    </div>

</body>
</html>

