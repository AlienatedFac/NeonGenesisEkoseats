<?php 
	session_start();
  require 'php/conexion.php';
    $consulta = $mysqli->query("SELECT * FROM usuarios WHERE id_usuario=".$_SESSION['id_usuario']);
    $resultado = mysqli_fetch_assoc($consulta);

  require 'php/conexion.php';
    $consulta2 = $mysqli->query("SELECT count(*) as num FROM productos WHERE id_usuario=".$_SESSION['id_usuario']);
    $resultado2 = mysqli_fetch_assoc($consulta2);

  require 'php/conexion.php';
    $consulta3 = $mysqli->query("SELECT count(*) as num FROM compras WHERE id_usuario=".$_SESSION['id_usuario']);
    $resultado3 = mysqli_fetch_assoc($consulta3);
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
    <link rel="stylesheet" type="text/css" href="css/dashboard.css"> 


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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
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
                  <a class="dropdown-item" href="dashboard.php">Dashboard</a><br>
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

      <div class="android-content mdl-layout__content" style="min-width: 100%;">
        
        <div class="d-flex" id="wrapper">

          <!-- Sidebar -->
          <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading" style="text-align: center;">
              <i class="fas fa-user" style="font-size: 150px;"></i>
            </div>
            <div class="list-group list-group-flush">
              <a href="dashboard.php" class="list-group-item list-group-item-action bg-light" id="menu">Menu</a>
              <a href="dashboardProductos.php" class="list-group-item list-group-item-action bg-light" id="productos">Productos</a>
              <a href="dashboardCompras.php" class="list-group-item list-group-item-action bg-light" id="compras">Compras</a>
            </div>
          </div>
          <!-- /#sidebar-wrapper -->

          <!-- Page Content -->
          <div id="page-content-wrapper">
            <div class="container-fluid">
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <i class="fas fa-user" style="font-size: 150px;"></i>
                  </div>
                  <div class="col-8">
                    <form action="" method="post" enctype="multipart/form-data" style="text-align: left;">
                      <input type="file" name="file">
                    </form>
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-4">
                    <label style="font-size: 20px;">Nombres:</label>
                    <input type="text" name="" value="<?php echo $resultado['nombre_usuario']; ?>" placeholder="" class="form-control">
                  </div>
                  <div class="col-8">
                    <label style="font-size: 20px;">Apellidos:</label>
                    <input type="text" name="" value="<?php echo $resultado['apellidos_usuario']; ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-4">
                    <label style="font-size: 20px;">Correo:</label>
                    <input type="email" name="" value="<?php echo $resultado['correo_usuario']; ?>" placeholder="" class="form-control">
                  </div>
                  <div class="col-8">
                    <label style="font-size: 20px;">Contraseña:</label>
                    <input type="password" name="" value="<?php echo $resultado['clave_usuario']; ?>" placeholder="" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <div class="card">
                      <div class="card-body" style="text-align: center;">
                        <h5 class="card-title">Productos Subidos</h5>
                        <p class="card-text" style="font-size: 30px;"><?php echo $resultado2['num']; ?></p>
                        <a href="dashboardProductos.php" class="btn btn-primary">Admnistrar Productos</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body" style="text-align: center;">
                        <h5 class="card-title">Compras Realizadas</h5>
                        <p class="card-text" style="font-size: 30px;"><?php echo $resultado3['num']; ?></p>
                        <a href="dashboardCompras.php" class="btn btn-primary">Admnistrar Compras</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#page-content-wrapper -->

        </div>
      </div>
    </div>
</body>
    <script src="js/material.min.js"></script>
    <script src="js/dashboard.js"></script>
</html>