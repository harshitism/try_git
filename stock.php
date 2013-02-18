<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	left: 0;
	top: 0;
	color: #000;
	background-color: #CCCCCC;
}
#apDiv1 #frame {
	position: absolute;
	width: 600px;
	height: 555px;
	top: 42px;
}
</style>
</head>

<body>
<div id="apDiv1">
<form action="stock2.php" method="post" target="stock">
<select name="type" >
  <option value="complete">COMPLETE</option>
  <option value="shirt">SHIRT</option>
  <option value="trouser">TROUSER</option>
  </select>
  <input type="submit" value="GET STOCK" />
</form>
<iframe name="stock" id="frame"></iframe>
</div>
</body>
</html>