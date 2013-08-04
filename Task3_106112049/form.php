<!DOCTYPE html>
<html>
<head>
<title>spi task</title>
<style>
div
{
color:blue;
font-family:"Palatino Linotype";
}
</style>
<script src="form.js"></script>
</head>
<body background="bc.jpg" onload="root()">
<table border="1" background="images.jpg" align ="center" style="position:absolute; left:575px; top:20px;">
<tr><td><h1><u><font color="blue" size="4" family="verdana" >REGISTRATION FORM </font></u></h1></td></tr>
</table>
<table  background="back.jpg" height="500" width="600" align="center" style="position:absolute; left:380px; top:120px;">
<form action="validate.php" method="post" name="form" align="center" onsubmit="return validation()" enctype="multipart/form-data">
<tr><td>NAME:<input type="text" name="uname"/><div id ="err1" style = "display:none">*Please Fill The Name</div><div id ="err2" style = "display:none">*First Letter Should Be Capital</div></td></tr>
<tr><td>D.O.B:-<input type="tel" name="day" size="1" maxlength="2" placeholder="DD">/<input type="tel" name="month" maxlength="2" size="1" placeholder="MM">/<input type="tel" name="year" maxlength="4" size="1" placeholder="YYYY"><div id ="err3" style = "display:none">*Please Enter The D.O.B Correctly</div><div id ="err8" style = "display:none">*Please Enter Valid D.O.B </div></td></tr>
<tr><td>SEX:-<input type="radio" name="sex" value="male">male<input type="radio" name="sex" value="female">female</td></tr>
<tr><td>DEPT:-
<select name="dept">
<option>civil</option>
<option>cse</option>
<option>ece</option>
<option>mech</option>
<option>eee</option>
<option>ice</option>
<option>meta</option>
<option>arch</option>
</select></td></tr>
<tr><td>ROLL NO:-<input type="tel" name="roll" minlength="10" maxlength="10" size="15"><div id ="err4" style = "display:none">*Please Enter The 10 Digit Roll No. Correctly</div></td></tr></br></td></tr>
<tr><td>EMAIL:-<input type="text" name="email"><div id ="err5" style = "display:none">*Please Enter Valid Email I.d</div></td></tr></td></tr></br>
<tr><td>PASSWORD:-<input type="password" name="pass" minlength="5" maxlength="9"/><div id ="err6" style = "display:none">*Please Fill the Password[contains only digits,alphabets,underscore]</div></td></tr></br></td></tr>
<tr><td>REPEAT PASSWORD:-<input type="password" name="rpass"><div id ="err7" style = "display:none">*Password Didn't Match</div></td></tr></br></td></tr>
<tr><td>PHOTO UPLOAD:-<input type="file" name="file" id="pto"/><div id ="err10" style = "display:none">*Please Check The format(.jpg or .png && Size<1MB) </div></td></tr>
<tr><td><input type="reset" onclick="location.reload()"></td></tr>
<tr><td><input type="submit" value="Final Submission"></td></tr>
</form>
</table>
</body>
</html>