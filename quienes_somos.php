<?php 
  session_start();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conocenos</title>

    <!-- Estilos -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.js"
    integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/quienes_somos.css">  
  </head>
   <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            
            facebook: "324124578524175", // Facebook page ID
            whatsapp: "+5219984250627", // WhatsApp number
            telegram: "9984250627", // WhatsApp number
            email: "ekoseats@gmail.com", // Email
            call: "9984250627", // Call phone number
            call_to_action: "Contactanos", // Call to action
            button_color: "#008f39", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<style>
  body{
    background: #eee7e5 !important;
  }
</style>
<!-- /WhatsHelp.io widget -->
<!-- /WhatsHelp.io widget -->
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Encabezado-->
        
      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title" style="color: green">
        <!--    <img class="android-logo-image" src="images/android-logo.png">-->EkoSeats
          </span>
          <!-- Agregamos un espacio entre el logo de y el menú -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <a href="carrito.php" title=""><i class="fas fa-shopping-cart" style="color: green; font-size: 2em;"></i></a>
          </div>
          <!-- Menú -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Home</a>
              <?php 
              if(!isset($_SESSION['id_usuario']) || !isset($_SESSION['nombre_usuario'])){
              ?>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Login</a>
              
              <?php
              }else{
              ?>

              <div class="dropdown mdl-navigation__link mdl-typography--text-uppercase" style="">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">
                  <?php echo $_SESSION['nombre_usuario']; ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Dashboard</a><br>
                  <a class="dropdown-item" href="php/cerrar_sesion.php">Cerrar Sesion</a>
                </div>
              </div>
              <?php
              }
              ?>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">Ekoseats
          </span>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/500x125.png">
        </span>
          <form action="catalogo.php" method="POST">
         <nav class="mdl-navigation">
        <span class="mdl-navigation__link" href="">MUEBLES</span>
<!-- ?php $catalogo1 = "Salas";?>-->
         <?php $catalogo1 = "Salas";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Salas</a>
         <?php $catalogo1 = "Sillas";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Sillas</a>
         <?php $catalogo1 = "Centros";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Centro de Sala</a>
             <?php $catalogo1 = "Mesas";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Mesas</a>
        <span class="mdl-navigation__link" href="">ACCESORIOS</span>    
        <?php $catalogo1 = "Accesorios";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Accesorios</a>
          <span class="mdl-navigation__link" href="">EKOSEATS</span>    
          <a class="mdl-navigation__link" href="index.php">Home</a>
          <a class="mdl-navigation__link" href="login.php">Login</a>
          <a class="mdl-navigation__link" href="quienes_somos.php">Conocenos</a>
          <div class="android-drawer-separator"></div>
     <span class="mdl-navigation__link" href="">Recursos</span>
          <a class="mdl-navigation__link" href="https://www.facebook.com/Ekoseats-324124578524175/?ref=bookmarks">Ekoseats en Facebook</a>
     
          <div class="android-drawer-separator"></div>
            
          <!-- <span class="mdl-navigation__link" href="">Versiones</span>
          <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
          <a class="mdl-navigation__link" href="">KitKat 4.4</a>
          <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
          <a class="mdl-navigation__link" href="">Historia de Android</a>
          <div class="android-drawer-separator"></div>
          
          <span class="mdl-navigation__link" href="">Para Desarrolladores</span>
          <a class="mdl-navigation__link" href="">Recursos para desarrollo de Apps</a>
          <a class="mdl-navigation__link" href="">Android Proyecto Open Source</a>
          <a class="mdl-navigation__link" href="">Android SDK</a> -->
     
            
        </nav>
        </form>
      </div>
      <div class="android-content mdl-layout__content">
        <div class="android-be-together-section mdl-typography--text-center" style="background: url('images/fondo_weno.png') center no-repeat; background-size: cover; height: 400px;">
          <div class="android-font android-slogan" style="color: white; text-shadow:
                                                                        -1px -1px 0 #000,  
                                                                          1px -1px 0 #000,
                                                                          -1px 1px 0 #000,
                                                                          1px 1px 0 #000;">
          Conocenos.</div>
          <div class="android-font android-sub-slogan" style="color: white; text-shadow:
                                                                        -1px -1px 0 #000,  
                                                                          1px -1px 0 #000,
                                                                          -1px 1px 0 #000,
                                                                          1px 1px 0 #000;">
          Por las generaciones futuras.</div>
        </div>
        
        <div class="container" style="min-width: 100% !important;">
          <div class="row" style="background-color: white; height: 300px;">
            <div class="col">
              <br><br><br>
              <span>Ekoseats se preocupa por el medio ambiente, tratamos de comercializar con productos que no afecten el medio ambiente satisfaciendo las necesidades de los usuarios ayudando asi a la tierra </span>
            </div>
            <div class="col">
              <br>
              <div class="circulo_quienes" style="position: absolute;right: 35%;background: url('images/quienes_somos.png') center no-repeat; background-size: cover;"></div>
            </div>
          </div>
          <div class="row" style="background-color: #F0F2EC; height: 300px;">
            <div class="col">
              <br>
              <div class="circulo_por" style="position: absolute;right: 35%; background: url('images/interrogacion.png') center no-repeat; background-size: cover;"></div>
            </div>
            <div class="col">
              <br><br><br>
              <span>Los problemas que ocasiona el hombre al medio ambiente ya no son desconocidos. Es vital reciclar y reducir el impacto que tiene el consumismo en el planeta. Eso nos lleva a la importancia de los productos ecológicos que son resultado de estas nuevas formas de producir bienes y servicios. Hay buenas razones por las que debemos darles prioridad. No son solo por valorar a la naturaleza. El eje fundamental es nuestro propio bienestar.</span>
            </div>
          </div>
          <div class="row" style="background-color: white; height: 300px;">
            <div class="col">
              <br><br><br>
              <span>Un problema que se ha manifestado con la modernidad, es la creación de productos baratos, con componentes que perjudican la salud. Ya sea que se trate de químicos, plásticos o cualquier otro producto, en muchos casos estos han provocado enfermedades graves con tratamientos delicados. Por eso es que debes recordar la importancia de los productos ecológicos. Porque generalmente no contienen nada que sea negativo para tu salud o la de tu familia.</span>
            </div>
            <div class="col">
              <br>
              <div class="circulo_para" style="position: absolute;right: 35%; background: url('images/para_que.jpg') center no-repeat; background-size: cover;"></div>
            </div>
          </div>
        </div>
        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">EkoSeats S.A de C.V</p>
            <p class="mdl-typography--font-light">Universidad Politecnica de Quintana Roo</p>
          </div>
        </footer>
      </div>
    </div>
 
    <script src="js/material.min.js"></script>


  </body>
</html>