<?php

session_start();
if(!$_SESSION['login'])
{
header('Location: index.php');
}
?>
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


$sr2=$_REQUEST["sr2"];
$result=mysql_query("SELECT * FROM stock WHERE no='$sr2' ");
if($row=mysql_fetch_array($result))
{
	$mrp=$row["mrp"];
	$_SESSION["sr2"]=$sr2;
	
}
	else 
	{
		echo "ENTRY NOT FOUND";
		header('Location:error.php');
		}
?>
<html>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:327px;
	height:80px;
	z-index:1;
	left: 0;
	top: 0;
}
</style>
<body>
<div id="apDiv1">
<form action="edited.php" method="post">
<table width="327" border="1" align="center">
<tr>

<td width="100">ITEM TYPE</td>
<td width="100">SIZE</td>
<td width="378">MRP</td>
</tr>
<tr>
<td><select name="type" >
  <option value="shirt">SHIRT</option>
  <option value="trouser">TROUSER</option>
  </select></td>
  <td><select name="size">
  <option value="28">28</option>
  <option value="30">30</option>
  <option value="32">32</option>
  <option value="34">34</option>
  <option value="36">36</option>
  <option value="38">38</option>
  <option value="40">40</option>
  <option value="42">42</option>
  </select></td>
  <td><input type="text" name="mrp" width="100" value="<?php  echo $mrp ;?>"/></td>
</tr></table>
<input type="submit" value="EDIT" />
</form>

</div>
</body>


</html>


