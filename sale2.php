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

$dis=$_REQUEST["dis"];
$sr=$_REQUEST["sr"];
$result=mysql_query("SELECT * FROM stock WHERE no='$sr' ");
if($row=mysql_fetch_array($result))
{
	$type=$row["type"];
	$size=$row["size"];
	$mrp=$row["mrp"];
	
 $result2=mysql_query("DELETE FROM stock WHERE no='$sr'");	
 
$dis2=$dis * $mrp;
$dis3=$dis2/100;
$net=$mrp - $dis3;
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
$date=date("d/m/Y",$tomorrow );
$result3=mysql_query("INSERT INTO psale VALUES ('$sr','$type','$size','$mrp','$dis','$net')");
$result5=mysql_query("INSERT INTO sale VALUES ('$sr','$type','$size','$mrp','$date')");
}
	else 
	{
		
		header('Location:error.php');
		}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:587px;
	height:500px;
	z-index:1;
	left: 0;
	top: 0;
}
</style>
</head>

<body>
<div id="apDiv1">

<table width="580" border="1" align="center">
<tr>
<td width="134" height="25">ITEM NO.</td>
<td width="100">ITEM TYPE</td>
<td width="60">SIZE</td>
<td width="76">MRP</td>
<td width="65">Discount</td>
<td width="105">Net Amount</td>
</tr>
<?php
$result4=mysql_query("SELECT * FROM psale");
while($row2=mysql_fetch_array($result4))
{
echo "<tr>
<td width='134'>".$row2['no']."</td>
<td>".$row2['type']."</td>
<td>".$row2['size']."</td>
<td> Rs".$row2['mrp']."</td>
<td> ".$row2['dis']." % </td>
<td> Rs".$row2['net']."</td>
</tr>";
}
?>
</table>
<form action="sale3.php">
<input type="submit" value="GENERATE BILL"/></form>
</div>
</body>
</html>