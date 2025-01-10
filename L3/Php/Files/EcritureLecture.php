<?php
$File = "C:\\Users\\gemsb\\OneDrive\\Bureau\\Php\\Files\\Fichier";
//Code pour écrire dans un fichier
$es=fopen($File, 'a');
$carac= (String)readline("Que voulez vous écrire dans le fichier? ");
fwrite($es,"\n".$carac);
// Code pour accéder à un élément spécifique du fichier
$read = file($File);
for($i = 0 ; $i < count($read); $i++){
    echo $read[2];
    exit;
}