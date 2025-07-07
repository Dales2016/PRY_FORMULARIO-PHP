<?php
//Mostramos todos los valores del formulario
echo "<h2>Datos Recibidos del Formulario:</h2>";

foreach ($_POST as $campo => $valor) {

    echo "<strong>" . htmlspecialchars($campo) . ":</strong>";
 
   if (is_array($valor)) {

      echo implode(", ",array_map('htmlspecialchars', $valor));    
   } else {
    echo htmlspecialchars($valor);
   }

   echo"<br>";
}
?>