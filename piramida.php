<html>
    <head>
    <title>make the number pyramid in PHP</title>
    </head>
<body>
<table>
<?php
	for($b=1;$b<=10;$b++)
	{
		echo "<tr>";
		for ($k=1;$k<=10;$k++)  
		{
			echo "<td>".$k*$b."</td>";
		}
		echo "</tr>";
	}
?>
</table>
</body>
</html>