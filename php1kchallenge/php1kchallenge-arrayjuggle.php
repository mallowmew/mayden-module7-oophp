<?php
$a = range(1000,0);
$b = array_keys($a);
array_pop($b);
$c = array_merge($b,$a);
foreach($c as $d) echo "$d<br>";

//119 chars