<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Click to Eat</title>
    <link rel="stylesheet" href="src/materialize/css/materialize.min.css">
  	<link rel="stylesheet" href="src/materialize/fonts/material-design-icons/material-icons.css">
    <link rel="stylesheet" href="CSS/stylecss.css">

  
  </head>
  <div class="section">
    <div class="row">
      <?php
      include("menuNoSession.php");
        include("load.php");
        include("carusel.php");
        include("modalLogin.php");
      ?>
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="images/comida.jpg"></div>
  </div>
  <div class="section amber lighten-5">
    <div class="row container">
        <div class="col s4 m4 l4 center">
          <i class="material-icons large">laptop</i>
          <h3>Has tu pedido</h3>
          <blockquote>
            <p class="light center">Realiza tu pedido desde la pagina.</p>
          </blockquote>
        </div>
        <div class="col s4 m4 l4 center">
          <i class="material-icons large">restaurant_menu</i>
          <h3>Tu decides</h3>
          <blockquote>
            <p class="light center">Recibe tu orden cuando llegues al restaurant o pidela a domicilio </p>
          </blockquote>
        </div>
        <div class="col s4 m4 l4 center">
          <i class="material-icons large">thumb_up</i>
          <h3>Satisfacción</h3>
          <blockquote>
            <p class="light center">Paga con tarjeta y no pierdas tiempo haciendo filas.</p>
          </blockquote>
        </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/comida2.jpg"></div>
  </div>
  <footer class="page-footer amber accent-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">SmartLines</h5>
          <p class="grey-text text-lighten-4">Proyecto en Desarrollo</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 Copyright Menu Digital - SmartLines
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/myscript.js"></script>
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script>
    $(document).ready(function(){
    	$(".button-collapse").sideNav();
      $('.modal').modal();
      $('.parallax').parallax();
      $('.slider').slider({
                interval: 3500,
                indicators: false
            });
      $('.carousel.carousel-slider').carousel({fullWidth: true});
      $('.modal').modal();
      $()
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function(){
    $('.preloader-background').delay(1700).fadeOut('slow');
    $('.preloader-wrapper')
      .delay(1700)
      .fadeOut();
    });
  </script>
</html>
