<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="ejercicio3_respuesta.php" method="GET" id="form_ejercicios">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="n1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Digite su Nombre">
          </div>
          <div class="form-group col-md-6">
            <label for="n2">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Digite su Apellido">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="n2">Cédula</label>
            <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Digite número 2">
          </div>
        </div>
        <button type="submit" name="datos" class="btn btn-primary">Operar</button>
      </form>

</body>
</html>

