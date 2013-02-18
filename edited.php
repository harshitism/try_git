<?php

session_start();
if(!$_SESSION['login'])
{
header('Location: index.php');
}
?>
<?php

$sr2=$_SESSION["sr2"];
$type=$_REQUEST["type"];
$size=$_REQUEST["size"];
$mrp=$_REQUEST["mrp"];
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

$result=mysql_query("UPDATE stock SET type='$type',size='$size',mrp='$mrp' WHERE no='$sr2' ");
if($result){echo "EDITED ";}
else echo "ERROR";