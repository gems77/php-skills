<?php
$insultes = ["merde", "con"];
$phrase = readline("Entrez une phrase: ");
foreach ($insultes as $insulte){
  $replace = str_repeat('*', strlen($insulte));
  $phrase = str_replace($insulte,$replace, $phrase);
}
echo $phrase;
