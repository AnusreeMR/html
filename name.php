<?php
$name=["anu","anju","sandra","dhathu","monu"];
$t=$name;
echo "DISPLAYING USING print_r <br><br>";
print_r($name);
echo "<br><br>";
echo "SORTING USING asort() <br><br>";
asort($name);
print_r($name);
echo "<br><br>";
echo "SORTING USING asort() <br><br>";
arsort($t);
print_r($t);
?>
