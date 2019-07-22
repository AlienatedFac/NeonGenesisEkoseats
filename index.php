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
    <title>EkoSeats</title>

    <!-- Estilos -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2cf79d88f0.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="/Ekoseats.ico" />



    <!-- alertify -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.min.css"/>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.rtl.min.css"/>
    
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="quienes_somos.php">Conocenos</a>
              <?php
              }else{
              ?>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="quienes_somos.php">Conocenos</a>
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
          <!-- <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">5.0 Lollipop</li>
            <li class="mdl-menu__item">4.4 KitKat</li>
            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
            <li class="mdl-menu__item">Historia de Android</li>
          </ul> -->
          <span class="android-mobile-title mdl-layout-title">
            <!--<img class="android-logo-image" src="images/android-logo.png">-->Ekoseats
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
        <span class="mdl-navigation__link" href="">ACCESORIOS</span>    
        <?php $catalogo1 = "Accesorios";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Accesorios</a>
        <span class="mdl-navigation__link" href="">CONSUMIBLES</span>    
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
          <div class="android-drawer-separator"></div>
     <span class="mdl-navigation__link" href="">Recursos</span>
          <a class="mdl-navigation__link" href="">Blog Oficial</a>
          <a class="mdl-navigation__link" href="">Ekoseats en Google+</a>
          <a class="mdl-navigation__link" href="">Ekoseats en Twitter</a>
          <a class="mdl-navigation__link" href="">Ekoseats en Facebook</a>
     
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
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
          <div class="android-font android-slogan" style="color: white; text-shadow:
                                                                        -1px -1px 0 #000,  
                                                                          1px -1px 0 #000,
                                                                          -1px 1px 0 #000,
                                                                          1px 1px 0 #000;">
          Por un mundo mejor.</div>
          <div class="android-font android-sub-slogan" style="color: white;
                                                              text-shadow:-1px -1px 0 #000,  
                                                              1px -1px 0 #000,
                                                              -1px 1px 0 #000,
                                                              1px 1px 0 #000;">
          Por las generaciones futuras.</div>
          <div class="android-font android-create-character">
            <a href=""></a>
          </div>

          <a href="#screens">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a>
        </div>
        <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div class="mdl-typography--display-1-color-contrast">Productos de todos los tamaños, materiales y colores.</div>
          <!--<div class="android-screens">
            <div class="android-wear android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/wear-silver-on.png">
                <img class="android-screen-image" src="images/wear-black-on.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android Wear</a>
            </div>
            <div class="android-phone android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/nexus6-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Móviles</a>
            </div>
            <div class="android-tablet android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/nexus9-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Tablets</a>
            </div>
            <div class="android-tv android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/tv-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android TV</a>
            </div>
            <div class="android-auto android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/auto-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left" href="">Muy Pronto: Android Auto</a>
            </div>
          </div>-->
        </div>
        
        <div class="android-more-section">   
     <!--Aqui Iran las recientes de Ekoseats-->
          <div id="mas_recientes"></div>
        </div>

        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <!--<button class="mdl-mega-footer--social-btn">G +</button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn">F</button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn">T</button>-->
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Inicio
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">EkoSeats S.A de C.V</p>
            <p class="mdl-typography--font-light">Universidad Politecnica de Quintana Roo</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link mdl-typography--font-light" href="">Blog</a>
            <a class="android-link mdl-typography--font-light" href="">Política de Privacidad</a>
          </div>

        </footer>
      </div>
    </div>

    </body>
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="">
    <div class="modal-dialog modal-sm" style="background-color: white;">
       <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><input type="text" value="" id="nombre" style="border: 0px; background-color: transparent;"></h5>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <input type="text" value="<?php echo $_SESSION['id_usuario'] ?>" id="id_usuario" style="display: none;">
          <input type="number" value="" id="id_producto" style="display: none;">
          <h5>Cantidad:</h5><input type="num" id="cantidad_producto" value="" placeholder="Cantidad">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="boton_agregar_carrito">Agregar</button>
        </div>
    </div>
    <script src="js/material.min.js"></script>
    <script src="js/mas_recientes.js"></script>
    
</div>
</html>