<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::..election::..</title>
</head>

<body>
<?php 
$con=mysql_connect("localhost","root","")or die("Problem with the connection to server :".mysql_error());
mysql_select_db("election",$con)or die("Problem with the connection to server :".mysql_error());
?>
</body>
</html>
