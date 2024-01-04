<html>
<center>
<?php
$name=["virat kholi","Rohit Sharma","Shikan Dhawan","Rishab Paude","Haridev Pandya"];
echo "<h4> Cricket team players name</h4>
<table border='1 px'>
<tr><th>sl no</th>
<th>Name</th></tr>";
for($i=0;$i<10;$i++)
{
$sl=$i+1;
echo "<tr><td>$sl</td><th>$name[$i]</th></tr>";
}
echo "</table>";
?>
