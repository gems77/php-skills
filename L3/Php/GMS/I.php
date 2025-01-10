<?php
$file = "C:\\Users\\gemsb\\OneDrive\\Bureau\\Php\\GMS\\SCH";
$in = fopen($file, "a");

$mots = "Feuille\n, Prier\n, Mangue\n, Lion\n, Argent\n, Generation\n, Fille\n, Aimer\n" ;
fwrite($in, "\n" . $mots) ;

$motTableau = explode("\n, ", $mots) ;

$i = rand(0, count($motTableau) - 1) ;
$mot = $motTableau[$i] ; 

$taille = strlen($mot) ; 
$indice = substr($mot, 0, 2) ; 

echo "Le mot généré a : " . $taille . " lettres et ses deux premières lettres sont : " . $indice."\n" ;

fclose($in) ; 
$Quiz = readline("Quel est ce mot:") ;
if ($Quiz === $i){
    echo "vous ètes un génie" ;
}
else{
    echo "vous ètes nul" ;
}
?>

