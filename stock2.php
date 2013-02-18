
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

$type=$_REQUEST["type"];
echo"<html><body><table width='550' border='1' align='center'>
<tr>
<td width='180'>ITEM NO.</td>
<td width='150'>ITEM TYPE</td>
<td width='153'>SIZE</td>
<td width='69'>MRP</td>
</tr>";

$count=0;
if($type=="complete")
{
$result= mysql_query("SELECT * FROM stock");
}
else if($type!="complete")
{
	$result=mysql_query("SELECT * FROM stock WHERE type='$type'");
}

while($row=mysql_fetch_array($result))
{
	$count++;
	echo "<tr>
<td width='150'>" . $row['no']. "</td>".
"<td width='200'>" . $row['type']."</td>".
"<td width='153'>" .$row['size']. "</td>".
"<td width='69'>" . $row['mrp']."</td>".
"</tr>";

	}
	echo "</table>
	<p>Total ".$type." Available = ".$count."</p>
	<a href='entry.php' target='main'>GOTO ENTRY</a>
	</body>
	</html>";

	?>
    