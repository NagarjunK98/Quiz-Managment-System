<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<style>
body
{
    background-image: url(images/b5.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
if (isset($_SESSION['login']))
{
echo "<h2 class=head1> Select Subject to take Quiz </h2>";

$rs=mysql_query("select * from subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
exit;
}
else
{
	echo "<center><h1>You need to login first<h1></center>";
}
?>
<br>
<center><a style="color:red;" href="index.php">click here to login</a><center>
</body>
</html>
