<?php
    function factorielle(int $nombre){
    $fac = 1;
for($i=1; $i<=$nombre; $i++){
   $fac =$fac*$i;
}
echo $fac;
}
$nombre = (int)readline("Veuillez entrez un nombre:");

factorielle($nombre);

// Methode sans fonction
$nombre = (int)readline("Veuillez entrez un nombre:");
$fac = 1;
for($i=1; $i<=$nombre; $i++){
   $fac =$fac*$i;
}
echo $fac;

