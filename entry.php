<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

session_start();
if(!$_SESSION['login'])
{
header('Location: login.php');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:600px;
	height:600px;
	z-index:1;
	left: 0px;
	top: 0px;
	background-color: #CCCCCC;
}
#edit  {
	position: absolute;
	width: 440px;
	height: 80px;
}
#add {
	position: absolute;
	left: 61px;
	top: 52px;
	height: 28px;
	width: 207px;
}
#delete {
	position: absolute;
	width: 200px;
	height: 80px;
}
</style>
</head>

<body>
<div id="apDiv1">
<form action="done.php" method="post" target="add">
<table width="600" border="1" align="center">
<tr>
<td width="150">ITEM NO.</td>
<td width="200">ITEM TYPE</td>
<td width="153">SIZE</td>
<td width="69">MRP</td>
</tr>
<tr>
<td width="150"><input type="text" name="sr" width="150"/></td>
<td><select name="type">
  <option value="l_cardigon">CARDIGAN-L</option>
  <option value="denim">DENIM</option>
  <option value="kurte">KURTE</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="shirt">SHIRT</option>
  <option value="trouser">TROUSER</option>
  </select></td>
  <td><select name="size">
  <option value="28">20</option>
  <option value="28">22</option>
  <option value="28">24</option>
  <option value="28">26</option>
  <option value="28">28</option>
  <option value="30">30</option>
  <option value="32">32</option>
  <option value="34">34</option>
  <option value="36">36</option>
  <option value="38">38</option>
  <option value="40">40</option>
  <option value="42">42</option>
  </select></td>
  <td><input type="text" name="mrp" width="100"/></td>
</tr></table>
<input type="submit" value="ADD" />
</form><iframe name="add" id="add" scrolling="no" frameborder="0"></iframe>
<br />
<br />



<form action="edit.php" method="post" style="float:left" target="edit">
  <table width="158" border="1" align="center">
<tr>
<td width="150">ITEM NO.</td>

</tr>
<tr>
<td width="150"><input type="text" name="sr2" width="150"/></td>

</tr></table>
<input type="submit" value="EDIT" />



</form>
<iframe name="edit" id="edit" scrolling="no" frameborder="0"></iframe>
<br />
<br />
<br />
<br />
<br />
<br />


<form action="delete.php" method="post" style="float:left" target="delete">
<table width="158" border="1" align="center">
<tr>
<td width="150">ITEM NO.</td>

</tr>
<tr>
<td width="150"><input type="text" name="sr3" width="150"/></td>

</tr></table>
<input type="submit" value="DELETE" />

</form>
<iframe name="delete" id="delete" scrolling="no" frameborder="0"></iframe>
<br />
<br />
<br />
<br />
<br />
<br />


<a href="entry.php" target="main">REFRESH</a>
</div>
</body>
</html>