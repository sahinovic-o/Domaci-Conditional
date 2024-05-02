<?php

//1. Napraviti varijablu $broj cija je vrijednost 10;
//2. Koristeci IF uraditi provjeru da li je broj paran ili neparan;
//3. Ispisati adekvatnu poruku "Broj je paran" ili "Broj je neparan";

$broj = 9;

if($broj % 2 == 0){   // Ovako da ne radimo -- matematicke operacije radimo sa varijablama
    echo "Broj je paran";
}else {
    echo "Broj je neparan";
}


// OVAKO RADIMO
$provjeraBroja = $broj % 2 ;

if($provjeraBroja == 0){
    echo "Broj je paran";
}else{
    echo "Broj je neparan";
}

?>