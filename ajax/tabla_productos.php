<?php session_start(); ?>
<br>
<a href="../NeonGenesisEkoseats/dashboardProductoCrear.php" class="btn btn-success" style="position: absolute; right: 0%;">Agregar</a>
<br><br><br>
<table id="tabla" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th>STOCK</th>
			<th>PRECIO</th>
			<th>IMAGEN</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		</tr>
	</thead>
	<tbody>
		<?php
            require '../php/conexion.php';
              $consulta = $mysqli->query("SELECT * FROM productos WHERE id_usuario=".$_SESSION['id_usuario']);
              $cont = 0;
              while($resultado = mysqli_fetch_assoc($consulta)){
                $datos=$resultado['id_producto']."||".
                       $resultado['nombre_producto']."||".
                       $resultado['descripcion_producto']."||".
                       $resultado['stock_producto']."||".
                       $resultado['precio_producto']."||".
                       $resultado['imagenes']."||".
                       $resultado['tipo_producto']."||".
                       $resultado['id_usuario'];
        ?>
                 <tr>
                 	<td><?php echo $resultado['id_producto']; ?></td>
                 	<td><?php echo $resultado['nombre_producto']; ?></td>
                 	<td><?php echo $resultado['descripcion_producto']; ?></td>
                 	<td><?php echo $resultado['stock_producto']; ?></td>
                 	<td><?php echo $resultado['precio_producto']; ?></td>
                 	<td><img src="<?php echo $resultado['imagenes'] ?>" style="width: 100px;"></td>
                 	
                 	<td style="text-align: center;"><a href="../NeonGenesisEkoseats/dashboardProductoEditar.php?id='<?php echo $resultado['id_producto'] ?>'" class="btn btn-primary" title=""><i class="fas fa-edit"></i></a></td>

                 	<td style="text-align: center;"><button type="button" class="btn btn-danger" id="eliminar_bt" value="<?php echo $resultado['id_producto'] ?>"><i class="fas fa-trash-alt"></i></button></td>
                 </tr>
        <?php
          }       
        ?>
	</tbody>
	<tfoot>
		<tr>
			
		</tr>
	</tfoot>
</table>
<script>
	$(document).ready(function(){
        $('#tabla').DataTable({
        	language: {
		        "decimal": "",
		        "emptyTable": "No tienes ningun producto.",
		        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
		        "infoEmpty": "Mostrando 0 de 0 de 0 Entradas",
		        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
		        "infoPostFix": "",
		        "thousands": ",",
		        "lengthMenu": "Mostrar _MENU_ Entradas",
		        "loadingRecords": "Cargando...",
		        "processing": "Procesando...",
		        "search": "Buscar:",
		        "zeroRecords": "Sin resultados encontrados",
		        "paginate": {
		            "first": "Primero",
		            "last": "Ultimo",
		            "next": "Siguiente",
		            "previous": "Anterior"
		        }
		    },
		    "lengthMenu": [ 4 ],
		    "searching": true,
        });
        $('#eliminar_bt').click(function(){
        	var id_producto = $('#eliminar_bt').val();
        	$.ajax({
			  url: '../NeonGenesisEkoseats/php/eliminar_producto.php',
		      type:     'post',
		      data:      {id_producto: id_producto},
		      success:function(r){
		      	if(r==1){
		      		$('#tablaProductos').load('../NeonGenesisEkoseats/ajax/tabla_productos.php');
		      		alertify.success("Agregado con Exito.");
		      	}
		      }
			});
        });
	});
</script>	