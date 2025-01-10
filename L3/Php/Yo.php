<?php
// $nom= 'BOSSOU';
// $prenom= 'Gemisse';
// $note1 =16;
// $note2 =18;
// $moyenne = ($note1+ $note2 )/2;
// echo "Bonjour $nom $prenom vous avez eu $moyenne de moyenne";
// $notes = [10, 20];
// echo $notes[1];
// $words = ["Fuego", "Casa", "Corazon", "Favor"] ;
// $WordGenerated = random_bytes($words[7]);
// echo $WordGenerated;

$file = "C:\\Users\\gemsb\\OneDrive\\Bureau\\Php\\GMS\\SCH";
$in = fopen($file, "a");

$mots = "Feuille\n, Prier\n, Mangue\n, Lion\n, Argent\n, Génération\n, Fille\n, Aimer\n";
fwrite($in, "\n" . $mots);

$motArray = explode("\n, ", $mots); // Split the string into an array of words

$i = rand(0, count($motArray) - 1); // Generate a random index to choose a word
$mot = $motArray[$i]; // Access the randomly chosen word

$taille = strlen($mot); // Get the length of the word
$indice = substr($mot, 0, 2); // Get the first two letters of the word

echo "Le mot généré a : " . $taille . " lettres et ses deux premières lettres sont : " . $indice;

fclose($in); // Close the file
$Quiz = readline("Quel est ce mot:") ;
if ($Quiz = $i){
    echo "vous ètes un génie";
}
else{
    echo "vous ètes nul";
}
?>

