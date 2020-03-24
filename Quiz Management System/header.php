<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="image/blackbar.jpg">
  <tr>
  
 
    <td width="10%">
     <img border="0" style="margin-top:10px;"src="image/image4.png" width="203" height="100" align="left">  <h1 style="color:white;font-size:50px;">SMART QUIZ</h1></td>
  </tr>
</table>

  <Table width="100%">
  <tr>
  <td>
  <!--<?php 'Hi'.$_SESSION['login']; ?>
  </td>-->
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Go to Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	
  </tr>
  
</table>
