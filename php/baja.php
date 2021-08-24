<?php
    include ("conecta.php");// inserta el código php de la página conecta.php
    /* require  para cuando el fichera es obligatorio*/
    // Cargo los datos del formulario
    $correo=$_POST["correo"];
    $usuario=$_POST["usuario"];
    $clave=$_POST["clave"];

    //Inserto los datos en la bd
    //primero hacer una select
    // si lo encuentra preguntar si quiere borrarlo
    //si acepta borrar

    /* if($resultado=="usuario" && $resultado=="clave" && $resultado=="correo");
    echo "<script>alert('hola)</script>";  */
    
    /* $borrar="delete from usuarios 
                where usuario='$usuario'"; */
    $seleccionar="select * from clientes
                    where usuario='$usuario' and correo='$correo' and clave='$clave';";
      
    $resultado=mysqli_query($con, $seleccionar);// se le pasa la conexión y la sql a ejecutar
    /* echo mysqli_affected_rows($con); */

    if(mysqli_affected_rows($con)>0)// Si ha encontrado 1 
    {
        
            $borrar="delete from clientes where usuario='$usuario' and correo='$correo' and clave='$clave';";
            $rs=mysqli_query($con, $borrar);    
            
            if(isset($rs))/* significa que si tiene valor rs */

                 echo "<script>alert('Se han eliminado sus datos correctamente');
                 window.location='index.html';</script>";
            else
                die("Error: " . mysqli_error($con));
       
    }
    else
    {
      /*  die("Ha habido un problema, introduzca de nuevo sus datos.".mysqli_error("$con")); */
      echo " usuario no encontrado";
    
    }
    mysqli_close($con);// Cierra la conexión se le pasa como parámetro el objeto de conexión 
?>