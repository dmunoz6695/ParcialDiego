<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          Datos a editar
        </div>
        <div class="card-body">

          <form action="index.php" method="post">
            <input class="form-control" type="hidden" name="id" value="<?= $_GET['id'] ?>">
            Nombre: <input class="form-control" required placeholder="Edite el nombre" type="text" name="nombre" id="">
            <br>
            Apellido: <input class="form-control" required placeholder="Edite el apellido" type="text" name="apellido" id="">
            <br>
            Edad: <input class="form-control" required placeholder="Edite la edad" type="text" name="edad" id="">
            <br>
            <input class="bt btn-success" type="submit" value="Editar">
          </form>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>