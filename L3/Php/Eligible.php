<?php

$nom = (String)readline ("Entrez votre nom: ");
$prénom = (String)readline ("Entrez votre prénom: ");
$age= (int)readline ("Entrez votre age: ");
if ($age>12){
    echo "Bonjour Mr $nom $prénom, vous avez $age ans et vous ètes éligible à notre société. ";
}else if ( $age<12 ){
    echo "Bonjour Mr $nom $prénom, vous avez $age et vous n'ètes pas éligible à notre société. ";
}else if ( $ag<0 && $age>20 ){
    echo "Bonjour Mr $nom $prénom, vous avez $age et vous ne faites pas partie de la catégorie de nos étudiants. ";

}



