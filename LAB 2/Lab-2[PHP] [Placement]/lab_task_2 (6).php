<!-- search an element from array -->
<?php

$numbers = array(5, 6, 7, 8, 9);

$Num = 7;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $Num) {
   
    echo "The number $Num was found in the array.";
        break;
    }
}

if (!in_array($Num, $numbers)) {
    echo "The number $Numr was not found in the array.";
}
?>