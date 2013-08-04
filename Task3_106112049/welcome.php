<!DOCTYPE html>
<html language="en">
<head>
<title>online</title>
<meta name="author" content="rishav">
<meta name="description" content="ele">
<script>
var p=change.new.value;
var letter=/\w{4,9}$/;
if(p=="" || p==null || !p.match(letter))  
{document.getElementById('err6').style.display = "block";
chk++;}
var q=change.rnew.value;
if(q=="" || q==null || q !=p)
{document.getElementById('err7').style.display = "block";
chk++;}
function pass()
{
document.getElementById('err1').style.display = "block";
}
</script>
</head>
<body background="bc.jpg
<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: index.php");
} ?>
<?php
echo "<a href='logout.php'>LOG OUT</a>";?>
<h4 style="position:absolute; left:550px; top:30px;">!!!YOU ARE LOGGED IN!!!</h4>
<table border="1" bordercolor="green" style="position:absolute; left:520px; top:150px;">
<div><tr><td><a href='index.php' onclick="history.go(+1);">SIGN OUT</a></td><td onclick="pass()">CHANGE PASSWORD</td></tr></div></table>
<form name="change" action="change password.php" method="post">
<table border="1" style="position:absolute; left:460px; top:250px; display:none" id ="err1">
<tr><td>New Password:-<input type="password" name="new"><div id ="err6" style = "display:none">*PLEASE FILL THE PASSWORD[CONTAINS ONLY DIGITS,ALPHABETS,UNDERSCORE]</div></td></tr>
<tr><td>Confirm New Password:-<input type="password" name="rnew"><div id ="err7" style = "display:none">*PASSWORD DIDN'T MATCH</div>
<input type="submit"></td></tr>
</table>
</form>
</body>
</html>