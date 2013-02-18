<?php
$uname=$_REQUEST["uname"];
$pass=$_REQUEST["pass"];

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

$result=mysql_query("SELECT * FROM login WHERE uname='$uname' and password='$pass'");
$row = mysql_fetch_array($result);
if($row)
{
	$result10=mysql_query("DELETE FROM psale");
session_start();
$_SESSION['login']=TRUE;
$_SESSION['uname']=$uname;
echo "ADMIN LOGGED IN";
}
else echo "Incorrect username";
?>