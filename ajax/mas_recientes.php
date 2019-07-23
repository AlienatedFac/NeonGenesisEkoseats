<div class="android-section-title mdl-typography--display-1-color-contrast">Más Recientes</div>
          <div class="android-card-container mdl-grid">
            <!-- Aqui el contador $contador va alreves para que cargue los que se van subiendo pero como Yisus no ha subido nada pues vale verga -->
           <?php
                    require '../php/conexion.php';
                    $consulta = $mysqli->query("SELECT * FROM productos ORDER BY id_producto DESC");
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
                              <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='detalles.php?valor= <?php echo $resultado['id_producto'] ?>'>Ver mas</a>
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