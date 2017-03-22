<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido Administrador</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../../CSS/menuVerticalAdminitrador.css">
    <link type="text/css" rel="stylesheet" href="../../CSS/adminPacStyle.css">
    <!--<link type="text/css" rel="stylesheet" href="../../CSS/bootstrap.min.css">-->
    <link type="text/css" rel="stylesheet" href="../../CSS/w3css.css">
</head>
<body>
<h1>Registrar nuevo paciente -- <a href="../PrincipalRecepcionista.php">Regresar</a></h1>

<div class="divAcomodo">
    <form form class="w3-container" method="post" action="">

        <label class="w3-label w3-text-blue"><b><h3>Nombre de usuario</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtuser" >

        <label class="w3-label w3-text-blue"><b><h3>Contraseña</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtcontrasena">

        <label class="w3-label w3-text-blue"><b><h3>Nombre/s</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtnombrepac">

        <label class="w3-label w3-text-blue"><b><h3>Apellido</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtapellido">

        <label class="w3-label w3-text-blue"><b><h3>Correo electronico</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtcorreo">

        <label class="w3-label w3-text-blue"><b><h3>Telefono(Con lada)</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txttelefono">

        <label class="w3-label w3-text-blue"><b><h3>Fecha de nacimiento</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="date" name="txtfecnac">

        <label class="w3-label w3-text-blue"><b><h3>Sexo</h3></b></label>
        <select class="cmb" name="sexo" >
            <option value="null">Seleccionar uno</option>
            <option value="Masculino">Maculino</option>
            <option value="Femenino">Femenino</option>
        </select><br>

        <input class="w3-btn w3-blue-grey margenArriba" type="submit" name="Enviar" value="Agregar">
        <input class="w3-btn w3-blue-grey margenArriba margenLateral" type="reset">
    </form>
</div>

</body>
</html>