<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
 <link rel="stylesheet" type="text/css" href="css/temp.css">
<title>Register</title> 
<script type="text/javascript"> 
function hgsubmit() 
{ 
if (/\S+/.test(document.hgmailer.name.value) == false) alert ("Please provide your name."); 
else if (/^\S+@[a-z0-9_.-]+\.[a-z]{2,6}$/i.test(document.hgmailer.email.value) == false) alert ("A valid email address is required."); 
 else if (/\S+/.test(document.hgmailer.teamname.value) == false) alert ("Your team name is needed."); 
 else{
  var ddl = document.getElementById("leagues");
  var selectedValue = ddl.options[ddl.selectedIndex].value;
  if (selectedValue == "division")
   {
    alert("Please pick a prefered division");
   }
  else { 
  	document.getElementById("hgmailer").submit();
       alert ('Thank you for your interest!\nWe`ll be in touch shortly.'); 
       } 
}
} 
</script> 
</head> 
<h1>Tons of bux 3rd Annual Softball Tournament
</h1>
<!--
<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="index.html">Home</a></li>
  <li><a href="about.php">About</a>
    <ul>
      <li><a href="about.php">Information</a></li>
      <li><a href="about.php">Accomodation</a></li>
      <li><a href="about.php">Contact us</a></li>
      </li>
    </ul>
  </li>
  <li><a href="register.php">Register</a>
  </li>
  -->
</ul>
</nav>
<div id="info">
<form action="./sendmail" method="post" id="hgmailer" name="hgmailer"> 
<input type="hidden" name="recipient" value="IT@tonsofbux.com"> 
<input type="hidden" name="subject" value="FormMail E-Mail"> 
Please enter your team`s information here and a representative will be in touch through the E-mail provided.<br><br>
Your name: <input type="text" name="name" size="30" value=""><br><br>
Your E-mail: <input type="text" name="email" size="30" value=""><br><br>
Team name: <input type="text" name="teamname" size="30" value=""><br><br>
<select id="leagues" name="leagues">
    <option value="division">--- Preferred division --</option>
    <option value="Elite">Elite</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Recreational">Recreational</option>
</select>
<br><br>
<input type="button" value="Submit" onclick="hgsubmit();"> 
</form> 
</div>
</body> 
</html> 