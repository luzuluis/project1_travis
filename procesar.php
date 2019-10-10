<?php
 
 require "Calculadora.php";
  $Calcular = new calculadora();
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $opcion = $_POST["opcion"];
  echo "El resultado de  " . $opcion . " " . $num1 . " y " . $num2 . " es ";
  echo $Calcular->operacion($num1,$num2,$opcion);
?>



