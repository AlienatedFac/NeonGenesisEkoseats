<?php 
      $catalogo1=$_GET['catalogo1'];
      $nombre_seccion=$catalogo1;
      $imagen="";
      $nombre="";
      $descripcion="";
      $stock="";
      $precio="";
      $usuario="";
      $tipo="";
      
      if ($nombre_seccion == "Salas") {
          $tipo=1;
      } elseif ($nombre_seccion == "Sillas") {
          $tipo=2;
      } elseif ($nombre_seccion=="Centros") {
          $tipo=3;
      }elseif ($nombre_seccion=="Mesas") {
          $tipo=4;
      }elseif ($nombre_seccion=="Accesorios") {
          $tipo=5;
      }
?>
    <div class="android-more-section">
          <div class="android-section-title" style="color: black; font-size: 40px;"><?php echo $nombre_seccion; ?></div>
          <div class="android-card-container mdl-grid">
              <?php
                  require '../php/conexion.php';
                    $consulta = $mysqli->query("SELECT * FROM productos WHERE tipo_producto=".$tipo);
                    $cont = 0;
                    while($resultado = mysqli_fetch_assoc($consulta)){
                      $datos=$resultado['id_producto']."||".
                             $resultado['nombre_producto']."||".
                             $resultado['descripcion_producto']."||".
                             $resultado['stock_producto']."||".
                             $resultado['id_usuario'];
                    ?>
                          <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
                            <div class='mdl-card__media'>
                              <img src='<?php echo $resultado['imagenes'] ?>' height="200" width="180">
                            </div>
                            <div class='mdl-card__title'>
                              <h4 class='mdl-card__title-text'><?php echo $resultado['nombre_producto'] ?></h4>
                                
                            </div>
                            <div class='mdl-card__supporting-text'>
                            </div>
                            <div class='mdl-card__actions'>
                              <button type="button" data-toggle="modal" data-target=".bd-example-modal-sm" style="border: 0px;background-color: transparent;" onclick="agregarDatosModal('<?php echo $datos ?>');"><i class="fas fa-cart-plus" style="font-size: 2em; color: green;"></i></button>
                              <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='detalles.php?valor= <?php echo $resultado['id_producto'] ?>' >Ver mas
                              </a>
                            </div>
                          </div>            
                    <?php
                      }       
                    ?>     
          </div>  