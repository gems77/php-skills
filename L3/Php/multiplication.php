<?php
$nombre= (int)readline ("Entrez un nombre: ");
for ($i=0; $i<13 ;$i++) {
    $result=$nombre*$i;
  echo "$nombre*$i = $result\n";
}