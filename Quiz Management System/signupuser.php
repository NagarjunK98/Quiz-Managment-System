<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
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
extract($_POST);
include("database.php");
$rs=mysql_query("select * from user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	echo "<br><div class=head1><a href=index.php>Login</a></div>";
	exit;
}
if(isset($_POST['submit']))
{
	mysql_query("call signup('".$_POST['lid']."','".$_POST['pass']."','".$_POST['name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['phone']."','".$_POST['email']."')");
	echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>"; 
	echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
	echo "<br><div class=head1><a href=index.php>Login</a></div>";

}

?>
</body>
</html>

