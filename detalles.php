<!doctype html>
<html lang="es">
<?php
session_start();
//Obterner las variable
$id_user;
$id_user=1;
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
    <script src="https://kit.fontawesome.com/2cf79d88f0.js"></script>
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
            <a href="carrito.php" title=""><i class="fas fa-shopping-cart" style="color: black; font-size: 2em;"></i></a>
          </div>
          <!-- Menú -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Home</a>
              <?php 
              if(!isset($_SESSION['id_usuario']) || !isset($_SESSION['nombre_usuario'])){
              ?>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Login</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="quienes_somos.php">Preguntas Frecuentes</a>
              <?php
              }else{
              ?>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="quienes_somos.php">Preguntas Frecuentes</a>
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
            <?php 
                $tipo= $resultado['tipo_producto'];
                $envio;
                if ($resultado['precio_producto']>=2500){
                  $envio=0;
                  $datoenvio="Gratis";    
                }
                else{
                  $envio=200;
                  $datoenvio="$200";
                }
            ?>
            <div class="mdl-typography--display-2 mdl-typography--font-thin">$ <?php echo $resultado['precio_producto'] ?>    </div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
              Envio: <?php echo $datoenvio ?>
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" onclick="myFunction()" href="">
                  Agregar al Carrito&nbsp;<i class="material-icons">chevron_right</i>
                </a>
                  
                
              </p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_xclick">
              <input type="hidden" name="business" value="substratum21@gmail.com">
              <input type="hidden" name="lc" value="MX">
              <input type="hidden" name="item_name" value="<?php echo $resultado['nombre_producto'] ?>">
              <input type="hidden" name="item_number" value="Id">
              <input type="hidden" name="amount" value="<?php echo $resultado['precio_producto'] ?>.00">
              <input type="hidden" name="currency_code" value="MXN">
              <input type="hidden" name="button_subtype" value="services">
              <input type="hidden" name="no_note" value="0">
              <input type="hidden" name="tax_rate" value="0.000">
              <input type="hidden" name="shipping" value="100.00">
              <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
              <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
              <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
            </form>
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
                 <?php
                    require 'php/conexion.php';
                    $consulta = $mysqli->query("SELECT * FROM productos WHERE tipo_producto= $tipo ORDER BY id_producto DESC");
                    $cont = 0;
                    while($resultado = mysqli_fetch_assoc($consulta)){
                    ?>
                          <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
                            <div class='mdl-card__media'>
                              <img src='<?php echo $resultado['imagenes'] ?>'>
                            </div>
                            <div class='mdl-card__title'>
                              <h4 class='mdl-card__title-text'><?php echo $resultado['nombre_producto'] ?></h4>
                                
                            </div>
                            <div class='mdl-card__supporting-text'>
                            </div>
                            <div class='mdl-card__actions'>
                              <i class="fas fa-cart-plus" style="font-size: 2em;"></i>
                              <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='detalles.php?valor= <?php echo $resultado['id_producto'] ?>'>Ver mas
                                <i class='material-icons'>chevron_right</i>
                              </a>
                            </div>
                          </div>             
                  <?php
                      if($cont == 3){
                        break;
                      }
                      $cont++;
                    }      
                  ?>  
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
    <script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>


  </body>
</html>
