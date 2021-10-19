<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie-edge">
	<title>DOCUMENT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!--boostrap CSS¡-->
	<link rel="stylesheet" type="text/css" href="css/boostrap.css">
	<!--estilo en css¡-->
	<style>
	.slider{
	 background:url("coca.png");
	 height: 100vh;
	 background-size: cover;
	 background-position: center;
	}	
	</style>
</head>
<body>
 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active " style="height: 100vh">
      <img src="cocacola.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>menu de digitos</h5>
        <p>aqui se muestran el saldo de las cuentas de los usuarios.</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 100vh">
      <img src="coca.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>tipo de billetes que se pueden manejar este es un billete europeo</h5>
        <p>este es un billete del pais rusia.</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 100vh">
      <img src="img/f3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Crisis economica</h5>
        <p>Representa la crisis economica del usuario.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--fin de carrusel¡-->