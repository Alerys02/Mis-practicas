<!DOCTYPE html>
<html lang="es">
  <body>
<?php
Function Mensaje (){
echo "<b>";
echo "Hola mundo";
}

Mensaje () ; //Mandamos a llamar una funcion 

$a=10; //variable global

Function Variable(){
$b=15; // variable local ya que no se declaro com...
echo "prueba de la impresion de variable dentr";
echo "La variable a es $a <br>";
echo "La variable b es $b <br><br>";
}

Variable();
echo "Prueba de la impresion de variales fuera";
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";

?>
  </body>
</html>
