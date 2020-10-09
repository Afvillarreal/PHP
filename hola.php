<?php

date_default_timezone_set('America/Bogota');

$t = date("h");
$m = date("m");
$s = date("s");
$t2 = 25;


echo("la hora es: ".$t."<br>"."minutos: ".$m."<br>"."segundos: ".$s."<br>");

if ($t < "20"){
    echo "Have a good day";
} else{
    echo "Have a good night";
}
echo "<br>";

$i = 1;
$j = 1;

while ($i <= 20) {
    echo ($i++ ." * 20=" .$j++*20 ."<br>");  }

echo "<br>";

$t = 5;



$i = 0;
do {
    echo $i;
} while ($i > 0);



?>