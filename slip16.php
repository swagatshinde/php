<?php

$a=array("Sagar"=>"31" , "Vicky"=>"41" , "Leena"=>"39" , "Ramesh"=>"40");


echo "Sorted in ascending order by value\n";
asort($a);
print_r($a);

echo "\nSorted in ascending order by key..\n";
ksort($a);
print_r($a);

echo "\nSorted in decending order by value\n";
arsort($a);
print_r($a);

echo "\nSorted in decending order by key..\n";
krsort($a);
print_r($a);
?>  