<!DOCTYPE html>
<html language="en">
<head>
<title>online</title>
</head>
<body background="Page.jpg">
</head>
<body>
<?php
session_start();
$ses=$_SESSION['Value']; 
session_destroy();
$k=0;
$p=$_POST['new'];
if($p=="" || $p==null)  
{echo "<center>"."PLEASE ENTER THE PASSWORD"."</center>"."<br/>"."<br/>";
$k++;}
else
{
if(preg_match('/[^a-zA-Z0-9_]/i', $p))
{echo "<center>"."PLEASE FILL THE PASSWORD[CONTAINS ONLY DIGITS,ALPHABETS,UNDERSCORE]"."</center>"."<br/>"."<br/>";
$k++;}
}
$q=$_POST['rnew'];
if($q=="" || $q==null || $q !=$p)
{echo "<center>"."PASSWORD DIDN'T MATCH"."</center>"."<br/>"."<br/>";
$k++;}
if($k==0)
{
$pa=md5($p);
$dbc =mysql_connect("localhost","root","");
//echo $ses;
mysql_select_db("spider3",$dbc);
$retval=mysql_query("UPDATE spider SET PASSWORD = '$pa' WHERE NAME = '$ses'",$dbc);
if(! $retval )
die('COULD NOT UPDATE DATA: ' . mysql_error());
else 
echo '<script type="text/javascript">alert("!!!!! YOUR PASSWORD CHANGED SUCCESSFULLY!!!!!"); </script>';
include('index.php');
}
?>
</body>
</html>