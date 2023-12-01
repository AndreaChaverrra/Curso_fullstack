<?php

if (isset($_GET['datos'])) {
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  $cedula = $_GET['cedula'];

}


echo 
    '<h2 id"h2_ejercicios">Nombre: '.$nombre.'<br>
    Apellido: '.$apellido.'<br>
    Cédula: '.$cedula.'<br> </h2>'


?>