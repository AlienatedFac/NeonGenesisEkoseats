<?php session_start(); ?>
<br>
<br><br><br>
<table id="tabla" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>FOLIO</th>
			<th>PRODUCTO</th>
		</tr>
	</thead>
	<tbody>
		<?php
            require '../php/conexion.php';
              $consulta = $mysqli->query("SELECT compras.id as id_compra, productos.nombre_producto as nombre_pro  FROM compras INNER JOIN productos WHERE compras.id_producto=productos.id_producto");
              $cont = 0;
              while($resultado = mysqli_fetch_assoc($consulta)){
                $datos=$resultado['id_compra']."||".
                       $resultado['nombre_pro'];
        ?>
                 <tr>
                 	<td><?php echo $resultado['id_compra']; ?></td>
                 	<td><?php echo $resultado['nombre_pro']; ?></td>
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
		        "emptyTable": "No tienes ninguna compra.",
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
	});
</script>	