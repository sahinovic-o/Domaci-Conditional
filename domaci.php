<?php


// DOMACI 1
// 1. Napraviti varijable $ime, $lozinka
// 2. Ako je ime "administrator" i lozinka "mojaSifraJeSigurna" onda ispisati poruku "Dobrodosao administratore"
// BONUS : Vas sistem treba da prepoznaje i pusta kombinacije "AdMIniStrator", "adminiSTRATOR"

// $ime = strtolower("AdMIniStrator") ;
// $lozinka = "mojaSifraJeSigurna" ;

// if($ime == "administrator" && $lozinka == "mojaSifraJeSigurna"){
//     echo "Dobrodosao administratore";
// }else {
//     echo "Pogresni kredencijali";
// }


// DOMACI 2
// 1. Na osnovu trenutnog vremena (sati) utvrditi da li je jutro, podne ili noc
// Jutro : 5, 12
// Podne : 12, 20
// Noc : 20, 5


$trenutnoVrijeme = date("H");

if($trenutnoVrijeme >= 5 && $trenutnoVrijeme <= 12){
    echo "Jutro";
}else if ($trenutnoVrijeme >= 12 && $trenutnoVrijeme <= 20){
    echo "Podne";
}else {
    echo "Noc";
}



?>