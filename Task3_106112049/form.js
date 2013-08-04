function root()
{
var inputs = document.getElementsByTagName('input');
    inputs[14].value="";
    inputs[13].value="";
	}
function validation()
{
var chk=0;
var x=form.uname.value;
if(x=="" || x==null )
{document.getElementById('err1').style.display = "block"; 
chk++;}
if(x.charAt(0)!= x.charAt(0).toUpperCase())
{document.getElementById('err2').style.display = "block";
chk++;}
var y=form.roll.value;
if(y.length!=10 || y=="" || y==null)
{document.getElementById('err4').style.display = "block";
chk++;}
var m=form.day.value;
var n=form.month.value;
var o=form.year.value;
if(m=="" || m==null || n=="" || n==null || o=="" || o==null || m>31 || m<01 || n>12 || n<01 || o<1985)	
{document.getElementById('err3').style.display = "block";
chk++;}
var z=form.email.value;
var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if(z=="" || z==null || atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
{document.getElementById('err5').style.display = "block";
chk++;}
var p=form.pass.value;
var letter=/\w{4,9}$/;
if(p=="" || p==null || !p.match(letter))  
{document.getElementById('err6').style.display = "block";
chk++;}
var q=form.rpass.value;
if(q=="" || q==null || q !=p)
{document.getElementById('err7').style.display = "block";
chk++;}
 var id_value = document.getElementById('pto').value;
 var id = document.getElementById('pto');
 if(id_value != '')
 { 
  var valid_extensions = /(.jpg|.jpeg|.png)$/i;   
  if(valid_extensions.test(id_value) && id.files[0].size<1024*1024)
  { }
  else
  {
   {document.getElementById('err10').style.display = "block";
   chk++;}
 } 
}
if (chk==0)
return true;
else 
return false;
