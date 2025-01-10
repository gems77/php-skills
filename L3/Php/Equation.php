<?php
$a = (int)readline("Veuillez entrer la valeur de a: ");
$b = (int)readline('Veuillez entre la valeur de b: ');
$c = (int)readline('Veuillez entrer la valeur de c: ');
if($a != 0){ 
    $equation = readline($a."x² + ". $b."x + ". $c) ;
    echo $equation;
    echo "\n";
    
 $discriminant = $b*$b-(4*$a*$c);
 echo "Discriminant = ".$discriminant;
 echo "\n";
 if($discriminant > 0) {
    $X1= (-$b - sqrt($discriminant))/2;
    $X2= (-$b + sqrt($discriminant))/2;
    echo "Les solutions de l'équation sont:\n";
    echo "X1= ".$X1." et X2= ". $X2;
 }else if ($discriminant === 0){
    $Xo = (-$b)/(2*$a);
    echo "La solution de votre équation est: Xo= ".$Xo;
 }else if ($discriminant<0){
    echo"Pas de solution";
 }

}else{
    echo 'Une équation ne peut ètre établie';
}
