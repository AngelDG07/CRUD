<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Accesorios</title>
<link rel="stylesheet" href="./Estilo_Formularios.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>  
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Accesorios <b>Tlato-Games</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir Nuevo Tlato-Accesorio</span></a>
					</div>
				</div>
			</div>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "bd";
				// Create Connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = "SELECT id, nombre, proveedor, descripcion, precio FROM accesorios";

				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
				  // output data of each row
				  echo "<table class='table table-striped table-hover'>";
				  echo "<tr>";
				  echo "<th>ID</th><th>Nombre</th><th>Proveedor</th><th>Descripcion</th><th>Precio</th><th>Acciones</th>";
				  echo "</tr>";
				  while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["proveedor"]."</td><td>".$row["descripcion"]."</td><td>$".$row["precio"]."</td>";
					echo "<td>
					<a class='edit' title='Editar' data-toggle='tooltip' href='./formaccesorios.php?id=".$row["id"]."&nombre=".$row["nombre"]."&proveedor=".$row["proveedor"]."&descripcion=".$row["descripcion"]."&precio=".$row["precio"]."'><i class='material-icons'>&#xE254;</i></a>
					<a class='delete' title='Eliminar' data-toggle='tooltip' href='./eliminaraccesorios.php?id=".$row["id"]."'><i class='material-icons'>&#xE872;</i></a>
					</td>";
					echo "</tr>";
				  }
				} else {
				  echo "0 results";
				}
				$conn->close();
				echo "</table>";
				?>
		</div>
	</div>        
</div>
<!-- Añadir -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="./insertaccesorios.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Añadir Accesorio</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nombre" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Proveedor</label>
						<input type="text" name="proveedor" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Descripcion</label>
						<textarea name="descripcion" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="text" name="precio" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Agregar">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>