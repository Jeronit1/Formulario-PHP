<!DOCTYPE html>
<html>

<head>
  <title>Ejemplo</title>
</head>

<body>
  <?php
  $num1 = array("1", "2", "4"); //array simple
  $num2 = array("name" => "David", "age" => "29"); //Arreglos asociativos(utilizan nombres que puedes asignarlos como claves) 
  function hola()
  { //funcion de prueba
    global $num1, $num2; //declarar los arrays globales para usarla dentron de la funcion
    echo $num2['name'];//array con clave
    foreach ($num1 as $nums) {//foreach para recorrer todo un arrreglo y imprimirlo por pantalla
      echo $nums . '<br />';
    }
  }   
  hola();//ejecuto la funcion
  echo "<h1>hola </h1>";//se puede usar html en codigo php
  ?>
</body>
<form action="" method="post"></form><!--crear formulartio con metodo post o get -->
<p>name: <input type="text" name="name" /></p><!--Escribir una opcion de textbox -->
<p>age: <input type="text" name="age" /></p>
<p><input type="submit" name="submit" value="ok" /></p><!--Hacer un boton que guarde los datos -->

</html>
