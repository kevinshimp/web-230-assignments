<?php

$string = 'This part don\'t search. This part search.';
$string_new = substr_replace($string, 'alex', 34, 6);

echo $string_new;

 ?>
