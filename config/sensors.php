<?php
$sens01 = "http://IP1";
$sens01_gettemp_1 = "curl ";
$sens01_gettemp_2 = "| sed -n '4p' | rev | sed 's/./&./3' | cut -c 3- | rev"; 
$sens02 = "http://IP2";
$sens02_gettemp_1 = "curl ";
$sens02_gettemp_2 = "| sed -n '4p' | rev | sed 's/./&./3' | cut -c 3- | rev"; 
?>

