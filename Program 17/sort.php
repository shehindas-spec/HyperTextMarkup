<!doctype html>
<html>
<?php
$names=array("Sammu","Aain","Bachu");
echo "<h3>Original Student List:</h3>";
foreach ($names as $n) {
    echo $n . "<br>";
}

asort($names);
echo "<h3>Ascending order(asort):</h3>";
foreach($names as $n) {
echo $n. "<br>";
}
arsort($names);
echo "<h3>Descending order(asort):</h3>";
foreach($names as $n) {
 echo $n. "<br>";
 }
 ?>
 </html>
