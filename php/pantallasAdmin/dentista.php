

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
<h1>Opciones de administración -- Dentista -- <a href="../PrincipalAdministrador.php">Regresar</a></h1>

<div class="divAcomodo">
    <h2>Agregar dentista</h2>
    <form form class="w3-container" method="post" action="">

        <label class="w3-label w3-text-blue"><b><h3>Nombre de usuario</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtuser" >

        <label class="w3-label w3-text-blue"><b><h3>Contraseña</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="password" name="txtcontrasena">

        <label class="w3-label w3-text-blue"><b><h3>Nombre/s</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtnombrepac">

        <label class="w3-label w3-text-blue"><b><h3>Apellido</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtapellido">

        <label class="w3-label w3-text-blue"><b><h3>Telefono(Con lada)</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txttelefono">

        <label class="w3-label w3-text-blue"><b><h3>Fecha de nacimiento</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="date" name="txtfecnac">

        <input class="w3-btn w3-blue-grey margenArriba" type="submit" name="Enviar" value="Agregar">
        <input class="w3-btn w3-blue-grey margenArriba margenLateral" type="reset">
    </form>
</div>

<div class="divAcomodo">
    <h2>Modificar - Mediante nombre de usuario</h2>
    <form form class="w3-container" method="post" action="">

        <div class="w3-border">
            <label class="w3-label w3-text-red"><b><h3>Campo obligatorio</h3></b></label>
            <label class="w3-label w3-text-blue"><b><h3>Nombre de usuario</h3></b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="txtuser" >
        </div>

        <label class="w3-label w3-text-blue"><b><h3>Contraseña</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="password" name="txtcontrasena">

        <label class="w3-label w3-text-blue"><b><h3>Nombre/s</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtnombrepac">

        <label class="w3-label w3-text-blue"><b><h3>Apellido</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtapellido">

        <label class="w3-label w3-text-blue"><b><h3>Telefono(Con lada)</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txttelefono">

        <label class="w3-label w3-text-blue"><b><h3>Fecha de nacimiento</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="date" name="txtfecnac">

        <input class="w3-btn w3-blue-grey margenArriba" type="submit" name="Enviar" value="Agregar">
        <input class="w3-btn w3-blue-grey margenArriba margenLateral" type="reset">
    </form>
</div>

<div class="divAcomodo">
    <h2>Eliminar</h2>
    <form form class="w3-container" method="post" action="">

        <label class="w3-label w3-text-blue"><b><h3>Nombre de usuario</h3></b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="txtuser" >
        <input class="w3-btn w3-red margenArriba" type="submit" name="eliminar" value="Eliminar">
    </form>
</div>
</body>
</html>