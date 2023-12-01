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
    <form action="ejercicio1.php" method="POST" id="form_ejercicios">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="n1">Número 1</label>
            <input type="number" step="any" name="n1" class="form-control" id="n1" placeholder="Digite número 1">
          </div>
          <div class="form-group col-md-6">
            <label for="n2">Número 2</label>
            <input type="number" step="any" name="n2" class="form-control" id="n2" placeholder="Digite número 2">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputState">Operación a realizar</label>
            <select id="inputState" name="ope" class="form-control">
              <option value="" selected>Seleccione una operación</option>
              <option value="1">Suma</option>
              <option value="2">Resta</option>
              <option value="3">Multiplicación</option>
              <option value="4">División</option>
            </select>
          </div>
        </div>
        <button type="submit" name="operar" class="btn btn-primary">Operar</button>
      </form>


<?php

if (isset($_POST['operar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $ope = $_POST['ope'];

    switch ($ope) {
      case '1':
        $total= $n1 + $n2;
        $ope2 = 'Suma';
        break;

      case '2':
        $total= $n1 - $n2;
        $ope2 = 'Resta';
        break;
      
      case '3':
        $total= $n1 * $n2;
        $ope2 = 'División';
        break;

      case '4':
        $total= $n1 / $n2;
        $ope2 = 'Multiplicación';
        break;
    }

    echo '<h2 id"h2_ejercicios">La '.$ope2.' entre el número 1: '.$n1.' y el número 2: '.$n2.' es igual a ='.$total.'</h2>';

}



?>


</body>
</html>

