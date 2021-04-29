<?php

$point1 = array(41.008610,28.971111); 
$point2 = array(39.925018,32.836956); 

if($this->is_distance($point1, $point2, '349:km')){
    echo 'Menzil içindedir.';
} else {
    echo 'Menzil içinde değildir.';
}


// if($this->is_distance($point1, $point2, '347:km')){
//     echo 'Menzil içindedir.';
// } else {
//     echo 'Menzil içinde değildir.';
// }
?>