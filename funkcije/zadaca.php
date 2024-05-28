<?php

/* PHP funkcije – vježba 1
 Proizvoljno deklarirajte funkciju koja vraća neki tekst.
 Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
 Ispišite vrijednost varijable */

function zadaca() {
    return "Ovo je zadaca";
}

$text = zadaca();

echo $text;

echo "<br><br>";


/* PHP funkcije – vježba 2
 Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija
treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih
lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao
rezultat.
 Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
 Ispišite vrijednost varijable. */


function nameSurname($name, $surname) {
    // dodavanje razmaka izmedu
    $fullname = $name . " " . $surname;

    //pretvaranje u velikaslova
    $upperCase = strtoupper($fullname);

    return $upperCase;
}

$result = nameSurname("Ivan", "Horvat");

echo $result;

echo "<br><br>";

/* PHP funkcije – vježba 3
 Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati
lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao
rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije.
 Deklarirajte funkciju kao varijablu.
 Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u
rasponu od 1 do 10 te ispišite rezultat.
 Ponovite postupak pet puta. */

function keepValue($number) {
    static $sum = 0;
    $sum += $number;
    return $sum;
}

$function2 = 'keepValue';

for ($i=1;$i<6;$i++) {
    $randomNumber = rand(1,10);
    $result2 = $function2($randomNumber);
    echo "Poziv $i: broj = $randomNumber, rezultat = $result2\n";
}

