<!doctype html>
<html lang="es">
<?php
//Obterner las variable

$valor=($_GET['valor']);
require 'php/conexion.php';
$consulta = $mysqli->query("SELECT * FROM productos WHERE id_producto = ".$valor);
$resultado = mysqli_fetch_array($consulta);

// Mostar las variables
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $resultado['nombre_producto']; ?></title>

    <!-- Estilos -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.js"
    integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
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
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field" />
            </div>
          </div>
          <!-- Menú -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="carrito.php">Carrito</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Login</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="catalogo.php">Catalogo</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="quienes_somos.php">Preguntas Frecuentes</a>
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
          <!-- <img class="android-logo-image" src="images/android-logo-white.png"> -->
        </span>
          <form action="catalogo.php" method="POST">
        <nav class="mdl-navigation">
        <span class="mdl-navigation__link" href="">MUEBLES</span>
<!-- ?php $catalogo1 = "Salas";?>-->
         <?php $catalogo1 = "Salas";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Salas</a>
         <?php $catalogo1 = "Comedores";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Comedores</a>
         <?php $catalogo1 = "Otros";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Otros</a>
        <span class="mdl-navigation__link" href="">ACCESORIOS</span>    
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
        <span class="mdl-navigation__link" href="">CONSUMIBLES</span>    
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
          <div class="android-drawer-separator"></div>
            
          <!-- <span class="mdl-navigation__link" href="">Versiones</span>
          <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
          <a class="mdl-navigation__link" href="">KitKat 4.4</a>
          <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
          <a class="mdl-navigation__link" href="">Historia de Android</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Recursos</span>
          <a class="mdl-navigation__link" href="">Blog Oficial</a>
          <a class="mdl-navigation__link" href="">Android en Google+</a>
          <a class="mdl-navigation__link" href="">Android en Twitter</a>
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
        <div class="android-wear-section">
          <div style="width: 100%;height: 100%; text-align: center;">
            <img src='<?php echo $resultado['imagenes'] ?>' alt="" style="width: auto;height: 80%;">
          </div>
          <div class="android-wear-band">
            <div class="android-wear-band-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin"><?php echo $resultado['nombre_producto'] ?></div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
              <?php echo $resultado['descripcion_producto'] ?>
              </p>
            <div class="mdl-typography--display-2 mdl-typography--font-thin">$ <?php echo $resultado['precio_producto'] ?></div>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                  Mira las novedades que tenemos&nbsp;<i class="material-icons">chevron_right</i>
                </a>
                
              </p>
            </div>
          </div>
        </div>
        <div class="android-customized-section">
          <div class="android-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">La forma de buscar y comprar mas facil para ti.</div>
            <p class="mdl-typography--font-light">
              Ponga las cosas que usted desee a la derecha en la pantalla principal: las últimas noticias, el clima o una galeria con sus fotos recientes.
              <br>
              <a href="" class="android-link mdl-typography--font-light">Busca productos de interes.</a>
            </p>
          </div>
          <div class="android-customized-section-image"></div>
        </div>
        <div class="android-more-section">
            
     <!--Aqui Iran las recientes de Ekoseats-->
          <div class="android-section-title mdl-typography--display-1-color-contrast">Relacionados</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-1.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Producto</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Descripcion</span>
              </div>
              <div class="mdl-card__actions">
                  <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="https://androidify.com" target="_blank">
                   Ver mas
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-4.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Producto</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Descripcion</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="https://androidify.com" target="_blank">
                   Ver mas
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-2.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Producto</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Descripcion</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Ver mas
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-3.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Producto</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Descripcion</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Ver mas
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
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
 
    <script src="js/material.min.js"></script>


  </body>
</html>
