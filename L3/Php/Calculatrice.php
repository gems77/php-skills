<?php
 $i = "1 ====> Multiplication" ;
$ii = "2 ====> Addition";
$iii = "3 ====> Soustraction";
$iiii = " 4 ====> Division" ;
$iiiii = " 5 ====> Racine Carré" ;

echo $i."\n" ;
echo $ii."\n" ;
echo $iii."\n" ;
echo $iiii."\n" ;
echo $iiiii."\n" ;
$calculatrice =(int) readline("Quelle opération souhaitez vous exécuter?");
if($calculatrice != 1 || $calculatrice != 2 || $calculatrice != 3 || $calculatrice != 4 || $calculatrice != 5){
    echo "Choix invalide";
}else{
   
    if ($calculatrice === 1){
        $nombre1 = (int) readline ("Entrez le premier nombre:") ;
        $nombre2 = (int) readline ( "Entrez le second nombre:") ;
        $multiplication = $nombre1*$nombre2 ;
        echo  "$nombre1*$nombre1 = $multiplication" ;
    
    }else if ($calculatrice === 2){
        $nombre1 = (int) readline ("Entrez le premier nombre: ") ;
        $nombre2 = (int) readline ( "Entrez le second nombre:") ;
        $addition = $nombre1 + $nombre2 ;
    echo "$nombre1 + $nombre2 = $addition" ;
    
    }
    else if ($calculatrice === 3){
        $nombre1 = (int) readline ("Entrez le premier nombre: ") ;
        $nombre2 = (int) readline ( "Entrez le second nombre:") ;
        $soustraction = $nombre1 - $nombre2 ;
    echo "$nombre1 - $nombre2 = $soustraction" ;
    
    }
    else if ($calculatrice === 4){
        $nombre1 = (int) readline ("Entrez le premier nombre: ") ;
        $nombre2 = (int) readline ( "Entrez le second nombre:") ;
        $division = $nombre1 / $nombre2 ;
    echo "$nombre1 / $nombre2 = $division" ;
    
    }
    else if ($calculatrice === 5){
        $nombre = (int) readline ("Entrez le premier nombre: ") ;
        $racinecarré = sqrt($nombre);
    echo "Racine carré de $nombre est égale à:\n" ;
    echo sqrt($nombre) ;
    
    }
}