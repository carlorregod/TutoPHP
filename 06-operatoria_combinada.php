<?php

$var1 = 8;
$var2 = 4;
$var3 = 3;
/*Reglas de op combinada
 * Resuelve son paréntesis
 * Se resuelven * y /
 * Se resuelven + y -
 * Se repite el ciclo hasta resolver todo
 */

echo $var1*$var2+$var3;
echo "<br>";
echo $var1+($var3-$var2)/$var3+$var2;

