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
          <span class="android-mobile-title mdl-layout-title">Ekoseats
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
        
        <div class="row">
          <div class="col-12">
            <h1>Subir Producto </h1>
          </div> 
        </div>


          <div class="col-md-8">
            <form method="post" action="product.php">

              <div class="form-group">
                <label>Nombre del Producto</label>
                <input type="text" class="form-control" name="pname" required>
              </div>

              <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control"  name="pirce" required>
              </div>

              <div class="form-group">
                <label>Catgoria</label>
                <input type="text" class="form-control" name="pcat" required>
              </div>

              <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" name="pdetails" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary" name="reg_p">Registar</button>
            </form>
          </div> 
        </div>

        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Productos en Stock</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>ID</th>
                  <th>Nombre del Producto</th>
                  <th>Precio del Producto</th>
                  <th>Categoria</th>
                  <th>Descripción</th> 
                </tr>
              </thead>
              <tfoot>

                <tr>
                <th>ID</th>
                  <th>Nombre del Producto</th>
                  <th>Precio del Producto</th>
                  <th>Categoria</th>
                  <th>Descripción</th> 
                </tr>
              </tfoot>
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdd.";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from products';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                           <tr>
                              <th>
                              <?php echo $row['product_id']; ?>
                              </th>
                              <td>
                              <?php echo $row['product_name']; ?>
                              </td>
                              <td>
                              <?php echo $row['product_price']; ?>
                              </td>
                              <td>
                              <?php echo $row['product_cat']; ?>
                              </td>
                              <td>
                              <?php echo $row['product_details']; ?>
                              </td>
                           </tr>
                        </tbody>

                        <?php
$count++;
}
} else {
echo '0 results';
}
?>
              
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
            <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script> 

        
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