<?php 
	include("config.php");
	$result = mysql_query(" SELECT * FROM tb_faltas", $link); 
	while ($row = mysql_fetch_row($result)){ 
	       echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td> <td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr><br>"; 
	} 
?>