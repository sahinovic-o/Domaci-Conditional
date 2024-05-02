<?php

$godine = 18;
$kazne = false;

// if($godine >= 18){
//     if($kazne == false){
//         echo "Mozete polagati za automobil";
//     }else {
//         echo "Imate kazni za platiti";
//     }
// }else {
//     echo "Niste punoljetni";
// }

if($godine >= 18 && $kazne == false){
    echo "Mozete polagati za automobil";
}else {
    echo "Ne mozete polagati za automobil";
}


?>