<?php
$nombre= rand(0, 5);
$entier=(int)readline("Entrez un nombre:");
if ($entier == $nombre){
    echo " vous ètes un génie";
}else if ($entier != $nombre){
echo "Oups quel con, la reponse était $nombre";
}
