<?php
// $A = readline("Veuillez entrer un nombre: ");
// $B = readline("Veuillez entrer un nombre: ");
// $PPCM = 0;
// if ($A == 0 ||  $B == 0 ){
//      $PPCM = 0;
//  echo "Le PPCM est:".$PPCM;
// }else if($A>=1 || $B>=1){
// for ($i=1; $i>$A; $i+$A){
//     $PPCM_A = min($i);
// }
//  }
// for($i = $B; $i+$B){
//     $PPCM_B = min($i);
// }
//     $PPCM = $PPCM_A = $PPCM_B;
//     echo "Le PPCM de" ($A; $B) "est".$PPCM ;

 function ppcm($a,$b){
    $res = $a * $b;
    while($a > 1){
        $r = $a%$b;
        if($r == 0){
            $result = $res / $b;
            break;
        }
        $a = $b;
        $b = $r;
    }
    return $result;
}
echo "Le PPCM est\n";
echo ppcm(12, 6); 

// function pgcm($a,$b){
//         $res = $a * $b;
//         while($b > 1){
//             $r = $b%$a;
//             if($r == 0){
//                 $result = $res /$b ;
//                 break;
//             }
//             $a = $b;
//             $b = $r;
//         }
//         return $result;
//     }
//     echo "Le PGCM est\n";
//     echo pgcm(100, 50); 