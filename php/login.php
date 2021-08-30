<?php

require ("conecta.php");// inserta el código php de la página conecta.php
require ("valida_campos.php");
require("test_input.php");

session_start();
if(isset($_POST))// esto es lo mismo que if(!_POST)$_SERVER["REQUEST_METHOD"]=="POST"
{
    //echo "viene por post";
    if(isset($_POST["usuario"]) && isset($_POST["clave"]))//Miro si los campos vienen rellenos
    {
        // Cargo los datos del formulario
        $usuario=TestInput(valida_campo($_POST["usuario"]));
        $clave=TestInput(valida_campo($_POST["clave"]));

        $sql="Select * from usuarios where usuario='$usuario' and clave='$clave'";
        //echo $sql;
        $rs=mysqli_query($con,$sql);

        echo mysqli_affected_rows($con);
        if(mysqli_affected_rows($con)>=1)
        {
            //echo "En if encontrtado";
            $row=mysqli_fetch_assoc($rs);
            $_SESSION["nombre"]=$row["nombre"];
            $_SESSION["apellidos"]=$row["apellidos"];
            $_SESSION["role"]=$row["role"];
            mysqli_close($con);
            header("location:noticias2.php?lang=noticias");
        }
        else
        {
            //echo "no ews usuario";
            mysqli_close($con);
            header("location:loginResponsive.html");
        }
    }
    else
    {
        echo "no vienen los datos";
        mysqli_close($con);
        header("location:loginResponsive.html");
    }
    
}
else
{
        echo "no viene por post";
        mysqli_close($con);
        //header("location:loginResponsive.html");
}
        
?>