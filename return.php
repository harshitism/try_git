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

$sr=$_REQUEST["sr"];
$result=mysql_query("SELECT * FROM sale WHERE no='$sr'");
if($row=mysql_fetch_array($result))
{
	$result10=mysql_query("DELETE FROM psale");
	$type=$row["type"];
	$size=$row["size"];
	$mrp=$row["mrp"];
	$result2=mysql_query("INSERT INTO stock VALUES ('$sr','$type','$size','$mrp')");
	$result3=mysql_query("DELETE FROM sale WHERE no='$sr'");
	echo "RETURN SUCCESSFUL";
	
	}
else 
	{
		
		header('Location:error.php');
		}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>