<?php
// function somme(int $note1, int $note2,int $note3 ){
 
    // $moyenne = ($note1+ $note2+ $note3)/3;
    // echo 'Ta moyenne est:'.$moyenne;
    // }
    // somme(14, 17, 20);
    
    //  Methode2
    function somme_second( ){
        $note1=readline('Veuillez la première note:');
        $note2 =readline('Veuillez entrer la deuxième  note:');
        $note3 =readline('Veuillez entrer la troisième note:');
    $moyenne = ($note1+ $note2+ $note3)/3;
    return $moyenne;
    }
    echo somme_second();
    
    