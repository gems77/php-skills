<?php
// $nom = readline("Veuillez entrez votre prénom:");
// $entier = (int)readline("Veuillez entrez votre nombre porte-bonheur:");
// $taille=strlen($nom);
// if($entier === $taille){
//   echo "Vous ètes un chanceux";
// }else{
//   echo"Vous ètes malchanceux";
// }
// function chance_First (String $nom, int $entier){
//   $taille=strlen($nom);
//   if($entier === $taille){
//     echo "Vous ètes un chanceux";
//   }else{
//     echo "Vous ètes malchanceux";
//   }
// }
// chance_First("Joe", 3);
function chance (){
  $nom = readline("Veuillez entrez votre prénom:");
  $entier = (int)readline("Veuillez entrez votre nombre porte-bonheur:");
  $taille=strlen($nom);
  if($entier === $taille){
    echo "Vous ètes un chanceux";
  }else{
    echo "Vous ètes malchanceux";
  }
}
chance ();

