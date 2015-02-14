<?php 
$sens01_temp = shell_exec($sens01_gettemp_1 . $sens01 . $sens01_gettemp_2);
$sens01_date = shell_exec("curl " . $sens01 . "| sed -n '5p'");
$sens02_temp = shell_exec($sens02_gettemp_1 . $sens02 . $sens02_gettemp_2); 
$sens02_date = shell_exec("curl " . $sens02 . " | sed -n '5p'");
?>

