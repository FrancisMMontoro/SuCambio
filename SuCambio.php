<?php
$Deuda = $_GET["deuda"];

$Billete200 = $_GET["Billete200"];

$Billete100 = $_GET["Billete100"];

$Efectivo_total = $Billete200 * 200 + $Billete100 * 100;

$Cambio_neg = $Deuda - $Efectivo_total;

$Cambio_pos = $Efectivo_total - $Deuda;






?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Su cambio Billete200</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <?php
if ($Deuda == ""  ) {
  
  /*Si no se escribe nada mostraremos un aviso al usuario*/
  
    print "<p>No ha escrito la cantidad a pagar.</p>\n ";
    

  
}
else if ($Billete200 == ""){

   print "<p>No ha escrito el número de billetes de 200.</p>\n"; 


}

else {
echo"
  <h1>Su cambio (Resultado)</h1>

  <p>Tiene que pagar <strong>$Deuda €</strong>.</p>

  <p>Ha entregado <strong>$Efectivo_total €</strong>.</p>
";
if ($Deuda == $Efectivo_total){
  echo "<p>Ha entregado la cantidad exacta.";
}
else if ($Deuda > $Efectivo_total) {

    echo "<p>Le falta entregar <strong>$Cambio_neg €</strong>.</p> "  ;

}


else{

  echo "<p>Tome su cambio: <strong>$Cambio_pos €</strong>";
$count = 0;
$count_b = 0;
  while ($Cambio_pos > 100){
    $Cambio_pos = $Cambio_pos - 200;
    $count ++;
    
    }
  if ($Cambio_pos == 100){

    $count_b ++;
  } 
  

echo "
   <strong> $count </strong> billetes de 200 € y <strong>$count_b </strong> de 100 €).</p>";
  }

  
}
?>
  <p><a href="index.php">Volver al formulario.</a></p>
</body>
</html>