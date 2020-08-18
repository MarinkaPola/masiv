<?php
$stroo_poems =
    "I think I'm drowning 
Asphyxiated
I wanna break this spell
That you've created
You're something beautiful
A contradiction
I wanna play the game
I wanna play the game";

$common_array= explode("\n", $stroo_poems);
$m=count($common_array);
//print_r ($common_array);
//print_r (count($common_array));
$common_array1 =[];
$lenth_array1 = [];
for ($i=0; $i<=$m-1; $i++){
    $array = str_split($common_array[$i]);
    $common_array1[$i]=($array);
    $t = count($array);
  //  print_r($array);
   // print_r($t);
    $lenth_array1[$i]=($t);
}
//echo "</br>";
//print_r($common_array1);
//echo "</br>";

//print_r(max($lenth_array1));
//echo "</br>";
echo "</br>";
for ($i=0; $i<=(max($lenth_array1))-1; $i++) {
$array_column[$i] = array_column($common_array1, $i);
    echo implode ($array_column[$i])."<br>";
}


