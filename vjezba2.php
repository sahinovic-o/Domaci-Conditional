<?php

// 1. Array $automobil ima 3 clana "Golf 1", "Golf 2", "Golf 3";
// 2. Uraditi provjeru da li se u tom arrayu nalazi "Golf 2";
// 3. Ako se nalazi ispisati poruku  "Nasli smo najboljeg golfa";

$automobili = ["Golf 1", "Golf 2", "Golf 3"];

$trazeniAutomobil = "Golf 2";

if(in_array("Golf 2", $automobili)){
    echo "Nasli smo najboljeg golfa";
}else{
    echo "Nema ga u nizu";
}


?>