<?php
//Recibir valores
$mililitros = strip_tags($_POST['mililitros']);
$metros = strip_tags($_POST['metros']);
$gramos = strip_tags($_POST['gramos']);
$celcius = strip_tags($_POST['celcius']);
$kilometros = strip_tags($_POST['kilometros']);
$pesos = strip_tags($_POST['pesos']);

echo "<h1>Resultados:</h1>";

echo $mililitros, " Mililitros a onzas= ", $mililitros*0.033814, " \n";
echo "<br>";
echo $metros, " Metros a yardas= ",$metros*1.09361, "  ";
echo "<br>";
echo $gramos, " Gramos a libras= ",$gramos*0.00220462, "  ";
echo "<br>";
echo $celcius, " Celcius a farenheit= ",($celcius*9/5) + 32, "  ";
echo "<br>";
echo $kilometros, " Kilometros a millas= ",$kilometros*0.621371, "  ";
echo "<br>";
echo $pesos, " Pesos a libras esterlinas= ",$pesos*0.038, "  ";
echo "<br>";
?>
<html>
<br />
<a href="/index.php">Inicio</a>
<br />
<a href="/formulario.php">Convertidor</a>
</html>
