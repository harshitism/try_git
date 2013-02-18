<?php


$b="";
$c="";
$d="";
$e="";
$file = fopen("host.txt", "r");
while(!feof($file))
{$a= fgetc($file);
$b=$b.$a;
}
fclose($file);
$file = fopen("username.txt", "r");
while(!feof($file))
{$a= fgetc($file);
$c=$c.$a;
}
fclose($file);
$file = fopen("password.txt", "r");
while(!feof($file))
{$a= fgetc($file);
$d=$d.$a;
}

fclose($file);
$file = fopen("db.txt", "r");
while(!feof($file))
{$a= fgetc($file);
$e=$e.$a;
}
fclose($file);
$con = mysql_connect($b,$c,$d);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($e, $con);

echo"<html><body><table width='550' border='1' align='center'>
<tr>
<td width='180'>ITEM NO.</td>
<td width='150'>ITEM TYPE</td>
<td width='153'>SIZE</td>
<td width='69'>MRP</td>
<td>DATE</td>
</tr>";
$result= mysql_query("SELECT * FROM sale");
while($row=mysql_fetch_array($result))
{
	
	echo "<tr>
<td width='150'>" . $row['no']. "</td>
<td width='200'>" . $row['type']."</td>
<td width='153'>" .$row['size']. "</td>
<td width='69'>" . $row['mrp']."</td>
<td width='69'>" . $row['date']."</td>
</tr>";

	}
	echo "</table>
	<a href='entry.php' target='main'>GOTO ENTRY</a>
	</body>
	</html>";
?>

