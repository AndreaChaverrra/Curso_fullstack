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
    <form action="ejercicio2.php" method="POST" id="form_ejercicios">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="n1">Edad</label>
            <input type="number" name="edad" class="form-control" id="edad" placeholder="Digite su edad">
          </div>
        </div>
        <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
      </form>

<?php

if (isset($_POST['calcular'])) {
    $edad = $_POST['edad'];

    if ($edad>=18) {
      echo '<h2 id"h2_ejercicios"> Es mayor de edad</h2>';
    }else{
      echo '<h2 id"h2_ejercicios"> Es menor de edad</h2>';
    }


}



?>


</body>
</html>

