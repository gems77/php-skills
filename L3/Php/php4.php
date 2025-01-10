<?php
  class mot{
    public function getNote(){
        $mot= readline ('veuillez entrez un mot');
        $reverse = strrev ($mot);
        if ($mot === $reverse) {
            echo 'ce mot est un palyndrome';
        } else{
            echo 'ce mot n\'est pas un palyndrome';
        }
     }

     public function moi(String $nom){
        $toi = "Gems";
        if($nom==$toi){
            echo "Hello je suis toi";
        }else{
            echo "Oups, je ne suis pas toi";
        }
     }
}

$mot = new mot;
//$mot -> getNote();
$mot -> moi('Gems');