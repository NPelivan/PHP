<?php

// zadatak 1

// Inicijalizacija brojača
$brojac = 1;

// Petlja while koja se izvršava dok je brojac manji ili jednak 10
while ($brojac <= 10) {
    echo $brojac . "\n";  // Ispis trenutnog brojača i prelazak u novi red
    $brojac++;  // Uvećanje brojača za 1
}

echo "<br><br>";

// zadatak 2

for($i=3; $i<=100; $i+=3) {
    echo $i . "\n";
}

echo "<br><br>";


//zadatak 3
for($i=1;$i<=10;$i++) {
    for($j=1;$j<=10;$j++){
        echo $i . "x" . $j . "=";
        echo $i * $j . "\n";
    }
}

echo "<br><br>";

// zadatak 4

$names = array("Marko", "Ana", "Jelena", "Ema", "Tanja");

foreach($names as $key => $value) {
    echo "$key: $value, ";
}

echo "<br><br>";

//zadatak 5

foreach($names as $value) {
    echo "$value, ";
}

echo "<br><br>";


// zadatak 6

$a = 5;
$b = 10;
$c = 15;


if ($b > $a && $b < $c || $b < $a && $b > $c) {
    echo "Vrijednost b ($b) je između a ($a) i c ($c).\n";
} else {
    echo "Vrijednost b ($b) nije između a ($a) i c ($c).\n";
}


echo "<br><br>";

// zadatak 7

$trenutniDan = date("N");


switch ($trenutniDan) {
    case 1:
        echo "Ponedjeljak";
        break;
    case 2:
        echo "Utorak";
        break;
    case 3:
        echo "Srijeda";
        break;
    case 4:
        echo "Četvrtak";
        break;
    case 5:
        echo "Petak";
        break;
    case 6:
        echo "Subota";
        break;
    case 7:
        echo "Nedjelja";
        break;
    default:
        echo "Nepoznat dan";
}

?>
