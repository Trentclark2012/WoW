<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("warcraft");
	$res=mysql_query("select * from class");
	echo "<table>";
	while($row=mysql_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>";?> <img src="<?php echo $row["filename"]; ?>" height="100" width="100"> <?php echo "</td>";
	echo "<td>"; echo $row["iname"]; echo "</td>";
		
		
	echo "</tr>";
		
		
	}
	echo "</table>";
	
	
?>
</body>
</html>