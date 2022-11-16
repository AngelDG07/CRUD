<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$proveedor=$_GET['proveedor'];
$descripcion=$_GET['descripcion'];
$precio=$_GET['precio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilo_Formulario_Edit.css">
    <title>Actualizacion</title>
</head>
<body>
    <div class="signupFrm">
        <div class="wrapper">
            <form action="./modaccesorios.php" class="form" method="GET">
                <h1 class="title">Actualizar</h1>
                <div class="inputContainer">
                    <input type="text" name="id" readonly="readonly" value='<?php echo $id ?>' class="input" placeholder="ID">
                    <label for="" class="label">ID</label>
                </div>
                <div class="inputContainer">
                    <input type="text" name="nombre" value='<?php echo $nombre ?>' class="input" placeholder="Nombre">
                    <label for="" class="label">Nombre</label>
                </div>
                <div class="inputContainer">
                    <input type="text" name="proveedor" value='<?php echo $proveedor ?>' class="input" placeholder="Proveedor">
                    <label for="" class="label">Proveedor</label>
                </div>
                <div class="inputContainer">
                    <input type="text" name="descripcion" value='<?php echo $descripcion ?>' class="input" placeholder="Descripcion">
                    <label for="" class="label">Descripcion</label>
                </div>
                <div class="inputContainer">
                    <input type="text" name="precio" value='<?php echo $precio ?>' class="input" placeholder="Precio">
                    <label for="" class="label">Precio</label>
                </div>
                <input type="submit" class="submitBtn" value="Actualizar">
            </form>
        </div>
    </div>
</body>
</html>