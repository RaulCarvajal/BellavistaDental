<html>
<head> <link type="text/css" rel="stylesheet" href="../../../CSS/menuVerticalAdminitrador.css"></head>
<?php
function mensaje($mensaje,$direccion)
{
    echo("<div id='mensaje'>
                  <div id='cabeceraMensaje'>Hecho</div>
                  <div id='imgInfo'> <img src='../../../IMG/info.png' alt=''></div>
                 
                 <h3>$mensaje</h3>
                 <a href=''>Aceptar</a>
                  </div>");

    //echo("<script language='javascript'>window.location.href='$direccion'</script>");
}
?>

</html>
