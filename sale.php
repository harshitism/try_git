<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function validate()
{
    if(!numvalidate())
        {
            return false;
        } 
}
function numvalidate()
{
	
    var numb = document.getElementById('num').value;
if(numb/numb==1)
{
	if(numb<=100){
                  document.getElementById('nummsg').innerHTML =" ";
                        return true;
                    }
                    else{
                        document.getElementById('nummsg').innerHTML ="Invalid Discount!!";
                        return false;
                    }
                }
                else{
                    document.getElementById('nummsg').innerHTML ="Invalid Discount!!";
                    return false;
                
	}
}
</script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:600px;
	height:600px;
	z-index:1;
	left: 0;
	top: 0;
	text-align: left;
	float: left;
}
#nummsg {
	position: absolute;
	left: 105px;
	top: 79px;
	width: 145px;
	height: 21px;
}
#apDiv1 #sale {
	position: absolute;
	left: 0px;
	top: 101px;
	width: 590px;
	height: 510px;
}
</style>
</head>

<body>
<div id="apDiv1">
<form action="sale2.php" method="post" style="float:left" target="sale" onsubmit="return validate();">
  <table width="300" border="1" align="center">
<tr>
<td width="150">DISCOUNT</td>
<td width="150">ITEM NO.</td>

</tr>
<tr>
<td width="150"><input type="text" name="dis" width="50" id="num" onblur="numvalidate();"/>
%</td>
<td width="150"><input type="text" name="sr" width="150"/></td>

</tr></table>
  <input type="submit" value="ADD TO BILL" />
  <div id="nummsg" style="color:#F30"></div>

</form>
<form action="return.php" method="post"  target="sale" >
  <table width="300" border="1" align="center">
<tr>

<td width="150">ITEM NO.</td>

</tr>
<tr>

<td width="150"><input type="text" name="sr" width="150"/></td>

</tr></table>
  <input type="submit" value="RETURN" />
  <div id="nummsg" style="color:#F30"></div>

</form>
<form action="salestock.php" method="post"  target="sale" ><input type="submit" value="SALE STOCK DETAILS" /></form>
<iframe name="sale" id="sale" frameborder="0"></iframe>
</div>
</body>
</html>