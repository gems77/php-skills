<?php
echo "Voici les mets qui sont actuellement disponible chez nous ";
echo "\n ";
$prix =0;
$i= "1-Salade ===> 1000F";
$ii= "2-Aiéké ===> 1500F";
$iii= "3-Riz ===> 800F";
$iiii= "4-Atassi ===>1000F";
echo $i."\n";
 echo $ii."\n";
 echo $iii."\n"; 
 echo $iiii."\n";
 
$Quiz =(int) readline("Combien de repas voulez vous acheter? ");
// $dep =(int) readline("Entrez le montant dont vous disposez: ");
if($Quiz === 1){
    $Lequel = (int)readline("Lequel:");
     $dep =(int) readline("Entrez le montant dont vous disposez: ");
    if($Lequel === 1){
    $prix = 1000;
    if($dep > $prix){
        $rel = $dep - $prix;
        echo "Votre reliquat est de: ".$rel;
    }else if($dep === $prix){
        $rel = O;
        echo "Votre reliquat est de: ".$rel;
    }else{
        echo "Votre montant prévu est inférieure au montant du produit";
    }
}
else if($Lequel === 2){
    $prix = 1500;
    if($dep > $prix){
        $rel = $dep - $prix;
        echo "Votre reliquat est de: ".$rel;
    }else if($dep === $prix){
        $rel = O;
        echo "Votre reliquat est de: ".$rel;
    }else{
        echo "Votre montant prévu est inférieure au montant du produit";
    }
}else if ($Lequel === 3){
    $prix = 800;
    if($dep > $prix){
        $rel = $dep - $prix;
        echo "Votre reliquat est de: ".$rel;
    }else if($dep === $prix){
        $rel = O;
        echo "Votre reliquat est de: ".$rel;
    }else{
        echo "Votre montant prévu est inférieure au montant du produit";
    }
}else if ($Lequel ===4){
    $prix = 1000;
    if($dep > $prix){
        $rel = $dep - $prix;
        echo "Votre reliquat est de: ".$rel;
    }else if($dep === $prix){
        $rel = O;
        echo "Votre reliquat est de: ".$rel;
    }else{
        echo "Votre montant prévu est inférieure au montant du produit";
    }
}
}else if($Quiz === 2){
  $Quiz1 =(int) readline("Quel est le premier repas que vous voulez acheter? ");
  $prix1 = 0;
 if($Quiz1 === 1){
    $prix1 = 1000;
}else if( $Quiz1 === 2){
    $prix1 = 1500;
}else if($Quiz1 ===3){
$prix1 = 800;
}else if($Quiz1 === 4){
    $prix1 = 1000;
}
$Quiz2 =(int) readline("Quel est le deuxième repas que vous voulez acheter? ");
$prix2 = 0;
if($Quiz2 === 1){
    $prix2 = 1000;
}else if( $Quiz2 === 2){
    $prix2 = 1500;
}else if($Quiz2 ==3){
$prix2 = 800;
}else if($Quiz2 === 4){
    $prix2 = 1000;
}
$prixQuiz2 = $prix1 + $prix2 ;
 $dep =(int) readline("Entrez le montant dont vous disposez: ");
 if($dep > $prixQuiz2){
 $rel1 = $dep - $prixQuiz2;
 echo "Votre reliquat est de: ".$rel1;
 }else if($dep === $prixQuiz2){
 $rel1 = 0;
  echo "Votre  reliquat est de: ".$rel1;
 }else{
  echo "Votre montant prévu est inférieure au montant du produit";
    }
}else if($Quiz === 3){
    $Quiz3 =(int) readline("Quel est le premier repas que vous voulez acheter? ");
  $prix3 = 0;
 if($Quiz3 === 1){
    $prix3 = 1000;
}else if( $Quiz3 === 2){
    $prix3 = 1500;
}else if($Quiz3 ==3){
$prix3 = 800;
}else if($Quiz3 === 4){
    $prix3 = 1000;
}
$Quiz4 =(int) readline("Quel est le deuxième repas que vous voulez acheter? ");
$prix4 = 0;
if($Quiz4 === 1){
    $prix4 = 1000;
}else if( $Quiz4 === 2){
    $prix4 = 1500;
}else if($Quiz4 ===3){
$prix4 = 800;
}else if($Quiz4 === 4){
    $prix4 = 1000;
}
$Quiz5 =(int) readline("Quel est le troisième repas que vous voulez acheter? ");
$prix5 = 0;
if($Quiz5 === 1){
    $prix5 = 1000;
}else if( $Quiz5 === 2){
    $prix5 = 1500;
}else if($Quiz5 ==3){
$prix5 = 800;
}else if($Quiz5 === 4){
    $prix5 = 1000;
}
$prixQuiz3 = $prix3 + $prix4 +$prix5 ;
$dep =(int) readline("Entrez le montant dont vous disposez: ");
if($dep > $prixQuiz3){
    $rel2 = $dep - $prixQuiz3;
    echo "Votre reliquat est de: ".$rel2;
}else if($dep === $prixQuiz3){
    $rel2 = O;
    echo "Votre  reliquat est de: ".$rel2;
}else{
    echo "Votre montant prévu est inférieure au montant du produit";
      }
    }else if($Quiz === 4){
    $Quiz6 =(int) readline("Quel est le premier repas que vous voulez acheter? ");
    $prix6 = 0;
if($Quiz6 === 1){
    $prix6 = 1000;
}else if( $Quiz6 === 2){
    $prix6 = 1500;
}else if($Quiz6 ==3){
$prix6 = 800;
}else if($Quiz6 === 4){
    $prix6 = 1000;
}
$Quiz7 =(int) readline("Quel est le deuxième repas que vous voulez acheter? ");
    $prix7 = 0;
if($Quiz7 === 1){
    $prix7 = 1000;
}else if( $Quiz7 === 2){
    $prix7 = 1500;
}else if($Quiz7 ==3){
$prix7 = 800;
}else if($Quiz7 === 4){
    $prix7 = 1000;
}
$Quiz8 =(int) readline("Quel est le troisième repas que vous voulez acheter? ");
    $prix8 = 0;
if($Quiz8 === 1){
    $prix8 = 1000;
}else if( $Quiz8 === 2){
    $prix8 = 1500;
}else if($Quiz8 ==3){
$prix8 = 800;
}else if($Quiz8 === 4){
    $prix8 = 1000;
}
$Quiz9 =(int) readline("Quel est le troisième repas que vous voulez acheter? ");
    $prix9 = 0;
if($Quiz9 === 1){
    $prix9 = 1000;
}else if( $Quiz9 === 2){
    $prix9 = 1500;
}else if($Quiz9 ==3){
$prix9 = 800;
}else if($Quiz9 === 4){
    $prix9 = 1000;
}
$prixQuiz4 = $prix6 + $prix7 +$prix8 + $prix9 ;
$dep =(int) readline("Entrez le montant dont vous disposez: ");
if($dep > $prixQuiz4){
    $rel3 = $dep - $prixQuiz4;
    echo "Votre reliquat est de: ".$rel3;
}else if($dep === $prixQuiz4){
    $rel3 = O;
    echo "Votre  reliquat est de: ".$rel3;
}else{
    echo "Votre montant prévu est inférieure au montant du produit";
      }
    }




