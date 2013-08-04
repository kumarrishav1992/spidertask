<!DOCTYPE html>
<html language="en">
<head>
<title>online</title>
</head>
<body background="bc.jpg">
<?php
        session_start();
   
        include("connect.php");
		
		
        $user = $_POST['name']; 	
        $_SESSION['Value']=$user; 
	    $pass = md5($_POST['rpwd']);
        $query= "SELECT NAME FROM spider WHERE NAME='$user'";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		if($num!=0)//username exist,now check for correct password
		{
		$query1= "SELECT PASSWORD FROM spider WHERE PASSWORD='$pass'";
		$result1=mysql_query($query1);
		$num1=mysql_num_rows($result1);
		{
		if($num1!=0)
		{
		    session_start();
			$_SESSION['username'] = $_POST['name']; 
            $_SESSION['password'] = $_POST['rpwd'];
			header("Location: welcome.php");

		}
		else
		echo "<center>"."<br/>"."WRONG USERNAME OR PASSWORD ENTERED!!!!GO BACK"."</center>";
		die();
		}
		}
        else
		{
		echo "<br/>"."<center>"."SORRY!! YOU ARE NOT REGISTERED!!!!GO BACK"."<center>";
		die();
		}
        ?>
</body>
</html>