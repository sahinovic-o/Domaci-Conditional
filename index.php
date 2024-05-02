<?php

$ime = "omar";
$godine = 27;
$visina = 185;

//Conditional statement - if

//Ako je vrijednost varijable $ime jednaka stringu "omar";

if($ime == "omar"){
    echo "Pozdrav $ime";
}


if($godine == 18){
    echo "Imate 18 godina";
}

else if($godine == 27){
    echo "Imate 27 godina";
}

if($visina < 170){
    echo "Niski ste";

}else {
   echo "Visoki ste";
}



$godinaRodjenja = 1996;


if($godinaRodjenja == 1995){
    echo "Imate 28 godina";
}
else if($godinaRodjenja == 1999){
    echo "Imate 24 godine";
}
else{
    $trenutnaGodina = Date("Y");
    $vaseGodine = $trenutnaGodina - $godinaRodjenja;
    echo "Imate $vaseGodine godina";
}

?>