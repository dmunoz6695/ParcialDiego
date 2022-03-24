
<?php include("conexion.php"); ?>

<?php


if (isset($_POST['nombre']) && !isset($_POST['id'])) {

  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $edad= $_POST['edad'];

    $objconexion= new conexion();
    $sql="INSERT INTO `persona` (`id`, `nombre`, `apellido`, `edad`) VALUES (NULL, '$nombre', '$apellido', '$edad')
";
    $objconexion->ejecutar($sql);
}

if (isset($_POST['id']) && isset($_POST['nombre'])) {



  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $edad=$_POST['edad'];
  $objconexion= new conexion(); 
  $sql="UPDATE persona SET nombre='$nombre', apellido='$apellido', edad='$edad' WHERE id='$id'";

  $objconexion->editar($sql);
  
  

}




if ($_GET) {


  $id=$_GET['borrar'];
  $objconexion= new conexion(); 
  $sql="DELETE FROM `persona` WHERE `persona`.`id` ='$id'";
  $objconexion->ejecutar($sql);


}





$objconexion= new conexion();
$datos=$resultado=$objconexion->consultar("SELECT * FROM `persona`");




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parcial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<br>


<div class="container">

  <div class="row">

    <div class="col-md-6">

      <div class="card">

        <div class="card-header">
          Datos
        </div>

        <div class="card-body">

          <form action="index.php" method="post">
            Nombre: <input class="form-control" required placeholder="Ingrese su nombre" type="text" name="nombre" id="">
            <br>
            Apellido: <input class="form-control" required placeholder="Ingrese su apellido" type="text" name="apellido" id="">
            <br>
            Edad: <input class="form-control" required placeholder="Ingrese su edad" type="text" name="edad" id="">
            <br>
            <input class="bt btn-success" type="submit" value="Agregar">
          </form>

        </div>

      </div>

    </div>

    <div class="col-md-6">
      <table class="table">

        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acción</th>
            <th>Acción</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($datos as $dato) { ?>
          <tr>
            <td> <?php echo $dato ['id'];   ?> </td>
            <td> <?php echo $dato ['nombre'];   ?> </td>
            <td> <?php echo $dato ['apellido'];   ?> </td>
            <td> <?php echo $dato ['edad'];   ?> </td>
            <td> <a name="" class="btn btn-danger" href="?borrar=<?php echo $dato['id'];  ?> "  >Eliminar</a></td>
            <td> <a name="" class="btn btn-primary" href="editar.php?id=<?php echo $dato['id'];  ?>"  >Editar</a></td>
          </tr>
          
          <?php } ?>
        </tbody>

      </table>
      
    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>