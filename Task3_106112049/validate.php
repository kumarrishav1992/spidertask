<!DOCTYPE html>
<html language="en">
<head>
<title>online</title>
</head>
<body background="bc.jpg">
<?php
$k=0;
$a=$_POST['uname'];
$m=$_POST['day'];
$n=$_POST['month'];
$o=$_POST['year'];
$d=$_POST['sex'];
$e=$_POST['dept'];

if($a==""  || $a==null )
{echo "Please Fill The Name"."<br/>"."<br/>";
$k++;}
else
{
if($a{0}!=strtoupper($a{0}))
{echo "First Letter Should Be Capital"."<br/>"."<br/>";
$k++;}
}
$b=$_POST['roll'];
if(strlen($b )!=10 || $b=="" || $b==null)
{echo "Please Enter 10 Digit Roll No "."<br/>"."<br/>";
$k++;}
$m=$_POST['day'];
$n=$_POST['month'];
$o=$_POST['year'];
if($m=="" || $m==null || $n=="" || $n==null || $o=="" || $o==null || $m>31 || $m<01 || $n>12 || $n<01 || $o<1985)	
{echo "Please Enter Valid D.O.B"."<br/>"."<br/>";
$k++;}
$z=$_POST['email'];
$atpos=strpos($z,"@");
$dotpos=strpos($z,".");
if($z=="" || $z==null || $atpos<1 || $dotpos<$atpos+2 || $dotpos+2>=strlen($z))
{echo "Please Enter Valid Email I.d"."<br/>"."<br/>";
$k++;}
$p=$_POST['pass'];
if($p=="" || $p==null)  
{echo "Please enter the password"."<br/>"."<br/>";
$k++;}
else
{
if(preg_match('/[^a-zA-Z0-9_]/i', $p))
{echo "Please Fill the Password[contains only digits,alphabets,underscore]"."<br/>"."<br/>";
$k++;}
}
$q=$_POST['rpass'];
if($q=="" || $q==null || $q !=$p)
{echo "Password Didn't match"."<br/>"."<br/>";
$k++;}
if (isset ( $_FILES['file'] ) )
 {
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    if (($file_size > 1024*1024))
    {echo "File too large. File must be less than 1 MB.";
    $k++;}	
	if( $file_type != "image/jpeg" && $file_type != "image/jpg"  && $file_type != "image/png")
    {echo "Invalid file type. Only  JPG, and PNG types are accepted.";          
    $k++;}   
 }   
else
{echo "Please upload the image";	
$k++;}
if($k==0)
{
include("connect.php");
$q=md5($p);
$query="INSERT INTO spider"."(NAME,DOB,SEX,ROLL,DEPT,EMAIL,PASSWORD)"."VALUES('$a','$m/$n/$o','$d','$b','$e','$z','$q')";
if(!($result=mysql_query($query,$dbc)))
die("CANNOT INSERT TO TABLE : " . mysql_error());
else 
include('thanks.php');
}
if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      
      }
?>
</body>
</html>