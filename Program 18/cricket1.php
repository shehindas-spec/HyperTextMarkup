<!doctype html>
<html>
<head>
<title> Indian Cricket Players</title>
</head>
<body>
<?php
$players = array("Rohit Sharma","Virat Kholi","Jasprit Bumrah","Ravindra Jadej","KL Rahul");
?>
<h2>List of Indian Cricket Players</h2>
<table border="1" cellpadding="10">
<tr>
<th>Serial No.</th>
<th>Player Name</th>
</tr>
  <?php
  $i=1;
  foreach ($players as $player) {
	echo "<tr>";
	echo "<td>" .$i. "</td>";
	echo "<td>" .$player. "</td>";
	echo "</tr>";
	$i++;
	}
	?>
</table>
</body>
</html>

