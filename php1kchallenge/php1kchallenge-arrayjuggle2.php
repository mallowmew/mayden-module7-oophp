<?php
$a = range(1000,0);
$b = array_keys($a);
array_pop($b);
foreach($b as $x) echo "$x<br>";
foreach($a as $y) echo "$y<br>";

//127 chars