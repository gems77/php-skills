<?php
$nombre = [7, 17, 29, 224, 1008, 50442];
$max=$nombre[0];
for ($i=0; $i<count($nombre); $i++){
  if( $nombre[$i] > $max){
    $max= $nombre[$i];
  }
}
echo "la valeur maximale est: ". $max;
// Methode facile
// $maxi = max($nombre);
// echo "la valeur maximale est: ".$maxi;
// echo "\n";
// $mini= min($nombre);
// echo "la valeur minimale est: ".$mini;



$nombre = [11, 89, 167, 11210,3, -1111];
$min=$nombre[0];
for ($i=0; $i<count($nombre); $i++){
 if($min>$nombre[$i]){
  $min=$nombre[$i];
 }
}
echo 'Le minimum est: '.$min;