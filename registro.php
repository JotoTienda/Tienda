<?php

    if(!$_POST){

        header("Location:./php/pages/registro.php");
    }
   
    $nombre=$_POST["nombre"];
    $apellido1=$_POST["apellido1"];
    $apellido2=$_POST["apellido2"];
    $correo=$_POST["correo"];
    $usuario=$_POST["usuario"];
    $clave=$_POST["clave"];
    $Direc=$_POST["Direc"];
    $Tele=$_POST["Tele"];
    $Codigop=$_POST["Codigop"];


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Fruit and Food</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/resgitroResponsive.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">744647091</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">info@fruitbenidorm.es</span>
					    </div>
					    <div class="col-md-7 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Reparto en 1 dia o recogida en local</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"></a><img src="Logo/logo_transparent_background.png" alt="" style="width: 100px;height: 80px;"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tienda</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.html">Verdura</a>
                <a class="dropdown-item" href="Fruta.html">Frutas</a>
                <a class="dropdown-item" href="alimentos.html">Productos de cernan??a</a> 
                <a class="dropdown-item" href="product-single.html">Productos</a>
                <a class="dropdown-item" href="cart.html">Carrito</a>
                <a class="dropdown-item" href="./php/pages/checkout.php">Compra final</a>
              </div>
            </li>
	          <li class="nav-item active"><a href="about.html" class="nav-link">Acerca de nosotros</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
   
    <!-- END nav -->
    <div id="errores"class="row block-8" style="padding: 20px;" ></div>
    <h1>Registrado</h1>
    <form action="registro.php"  method="POST" class="formulario">
      
        <h2 class="titulo">CREAR UNA CUENTA</h2>
        <div class="inputs">
          <input type="text" id="nombre" placeholder=<?php echo $_POST["nombre"];?> class="i100" required>
          <input type="text" id="apellido1" placeholder=<?php echo $_POST["apellido1"];?> class="i48" required>
            <input type="text" id="apellido2" placeholder=<?php echo $_POST["apellido2"];?> class="i48" required>
            <input type="email" id="correo" placeholder=<?php echo $_POST["correo"];?> class="i100" required>
            <input type="text" id="usuario" placeholder=<?php echo $_POST["usuario"];?> class="i48" required>
            <input type="password" id="clave" placeholder=<?php echo $_POST["clave"];?> class="i48" required>
            <input type="text" id="Direc" placeholder=<?php echo $_POST["Direc"];?> class="i100" required>
            <input type="text" id="Tele" placeholder=<?php echo $_POST["Tele"];?> class="i48" required>
            <input type="text" id="Codigop" placeholder=<?php echo $_POST["Codigop"];?> class="i48" required>
            <input type="submit" id="comprar" value="Comprar" class="enviar" onclick="return comprar();">
            <p class="enlace"> ??Quiere comprar? <a href="shop.html">Visite nuestra tienda</a></p>
        
            <br>
            

          </div>    
    </form>
    <br>
    
    
        


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
  
</html>