<?php
// $note = readline('Entrez votre note:');
// if ($note >= 12) {
//     echo 'Bravo vous avez la moyenne';
// } else {
//     echo 'Dommage vous navez pas la moyenne';
// }

$note =(int)readline ('Veuillez entrez une note: ');
if($note<12) {
    echo 'Vous ètes null';
}else if(12<$note && $note<15){
    
    echo "Acceptable";
}else if($note>15){
  
    echo "Tu es un génie";
}

$note =(int)readline ('Veuillez entrez une note: ');
switch ($note){
    case $note<12:
        echo "Vous ètes null";
    break;
    case 12<$note && $note<15:
        echo"Acceptable";
    break;
    case $note>15:
       echo "Tu es un génie";
    break;
    default:" Je ne peux donner de résultat";

}
