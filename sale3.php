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

$result2=mysql_query("SELECT SUM(net) AS total FROM psale");
$row=mysql_fetch_array($result2);
$total=$row["total"];
$result10=mysql_query("DELETE FROM psale");	

echo "STOCK DELETED <br/> BILL GENERATED <br/><span style='color:red;font-size:30px;'> TOTAL AMOUNT = Rs<b>".$total."</b></span>";
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