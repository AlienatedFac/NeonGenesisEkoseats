<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyProfile</title>

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
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="carrito.php">Carrito</a>
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
              <?php $catalogo1 = "Salas";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Salas</a>
              <?php $catalogo1 = "Comedores";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Comedores</a>
              <?php $catalogo1 = "Otros";?> <a class="mdl-navigation__link" href="catalogo.php?catalogo1=<?php echo $catalogo1 ?>">Otros</a>
              <span class="mdl-navigation__link" href="">ACCESORIOS</span>    
                <a class="mdl-navigation__link" href=""></a>
                <a class="mdl-navigation__link" href=""></a>
              <span class="mdl-navigation__link" href="">CONSUMIBLES</span>    
                <a class="mdl-navigation__link" href=""></a>
                <a class="mdl-navigation__link" href=""></a>
            </nav>
        </form>
	    </div>
	  
      	<div class="android-content mdl-layout__content">
        
        <div class="container-fluid">
         <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Página de Producto</li>
        </ol>

    <div class="user-menu__main">
      
    <div class="user-menu__user-info-outer-container">
      <div class="user-menu__user-info-inner-container">
        <div class="user-menu__user-badge">
          
            
    
    <div class="user-menu__loyalty-components">
      

    </div>
  
    
  <form data-js="user-menu:avatar-form" method="POST" action=" " enctype="multipart/form-data" class="user-menu__avatar-form">
    <label class="user-menu__avatar-label">
      <span class="user-menu__avatar-text">Subir foto</span>
      <span data-js="user-menu:avatar-icon"><svg class="user-menu__user-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 68 68"><defs><circle id="user-menu__avatar-circle" cx="22.706" cy="22.706" r="22.706"></circle></defs><g fill="none" fill-rule="evenodd"><circle cx="34" cy="34" r="34" fill="#EEE"></circle><g transform="translate(11 9)"><mask id="user-menu__avatar-mask" fill="#fff"><use xlink:href="#user-menu__avatar-circle"></use></mask><path fill="#BBB" fill-rule="nonzero" d="M23.011 62.588c-8.466 0-15.329-6.863-15.329-15.329 0-8.466 6.863-15.33 15.33-15.33 8.465 0 15.328 6.864 15.328 15.33 0 8.466-6.863 15.33-15.329 15.33zm0-1.419c7.682 0 13.91-6.228 13.91-13.91s-6.228-13.91-13.91-13.91-13.91 6.228-13.91 13.91 6.228 13.91 13.91 13.91z" mask="url(#user-menu__avatar-mask)"></path></g><path fill="#BBB" fill-rule="nonzero" d="M34.062 33.311a6.971 6.971 0 0 0 0-13.942v1.419a5.552 5.552 0 1 1 0 11.104v1.42z"></path><path fill="#BBB" fill-rule="nonzero" d="M34.009 37.233c-6.046 0-10.947-4.9-10.947-10.946 0-6.046 4.901-10.947 10.947-10.947 6.045 0 10.946 4.901 10.946 10.947 0 6.045-4.9 10.946-10.946 10.946zm0-1.419a9.527 9.527 0 1 0 0-19.055 9.527 9.527 0 0 0 0 19.055z"></path><path fill="#EEE" d="M41.056 15.442l2.817 2.816-3.755 3.755-2.816-2.816z"></path></g></svg></span>
      <img data-js="user-menu:avatar-picture" hidden="" class="user-menu__avatar-picture">
      <input data-js="user-menu:avatar-control" name="file" type="file" class="user-menu__avatar-control" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
    </label>
  </form>

  
          </div>
          <p class="user-menu__user-badge-title">¡Hola, Karen!</p></a>
        </div>
    </div>
    <a href="#menu-user" class="user-menu__primary-action ui-button ui-button--primary" data-id="my-account" rel="nofollow">
      Mi cuenta
    </a>
  </div>



<div class="popover">
   <button type="button" class="btn btn-info" data-toggle="popover" title="Modal long Text" data-content="Listen.">Hover 3</button>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
        placement: 'top',
        trigger: 'hover'
        });
    });
</script>
    
    <div class="user-menu__shortcuts ">
      <a href="#menu-user" data-id="purchases" rel="nofollow">Compras</a><br>
      <a href="#menu-user" data-id="sales" rel="nofollow">Ventas</a><br>
      <a href="#menu-user" data-id="personal-info" rel="nofollow">Mis datos</a><br>
      <a href="userInfo#menu-user" data-id="security" rel="nofollow">Seguridad</a><br>
      <a href="#menu-user" data-id="logout" rel="nofollow">Salir</a><br>
    <div class="user-menu__old">
      <a href="#nav-header" rel="nofollow" tabindex="7">Mi cuenta</a><br>
      <a href="#nav-header" rel="nofollow" tabindex="7">Salir</a><br>
    </div>
    <span class="user-menu__chevron" style="right: 233px;"></span>
  </nav></div>
        <a href="#nav-header" class="option-purchases" rel="nofollow" tabindex="8">Compras</a><br>
        <a href="javascript:0" class="option-notifications notifications-widget modeless-box-trigger" rel="nofollow" tabindex="8" aria-owns="modeless-28" aria-haspopup="true" popup-hidden="true"><i class="nav-icon-notifications"><span>Notificaciones</span></i><span class="ml-count" style="display: none">0</span></a></nav>
 
        
        <footer class="android-footer mdl-mega-footer">
        	<div class="mdl-mega-footer--middle-section">
            	<p class="mdl-typography--font-light">EkoSeats S.A de C.V</p>
            	<p class="mdl-typography--font-light">Universidad Politecnica de Quintana Roo</p>
        	</div>
		</footer>
		
      </div>
    <div> <!-- Div? -->
    </div>
 
    <script src="js/material.min.js"></script>


  </body>
</html>