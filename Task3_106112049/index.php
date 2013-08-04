<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html language="en">
<head>
<title>online</title>
<meta name="author" content="rishav">
<meta name="description" content="elec">
 <link type="text/css" rel="stylesheet" href="star rating.css"/>
</head>
<body background="Page.jpg">
<h1 id="task">SPIDER TASK 3</h1>
<p id="para1">WEB</p>
<p id="para2">DEVELOPMENT</p>
<table border="1" style="position:absolute; left:100px; top:300px;">
<div id="di">
<h4 style="color:green;position:absolute; left:150px; top:250px;">SIGN IN</h4>
<form action="sign in validate.php" name="election1" method="post">
<tr><td>USERNAME*:<br/><input type="text" name="name" /></td></tr><br/>
<tr><td>PASSWORD*:<br/><input type="password" name="rpwd" /></td></tr>
<tr><td><input type="submit" value="LOGIN" </td></tr>
</form>
</div>
</table>
<table border="1" style="position:absolute; left:1160px; top:300px;">
<div id="div">
<h4 style="color:green;position:absolute; left:1200px; top:250px;">SIGN UP</h4>
<form action="form.php" name="election2" method="post">
<tr><td><input type="submit" value="CLICK TO SIGN UP"</td></tr>
</form>
</div>
</table>
</body>
</html>