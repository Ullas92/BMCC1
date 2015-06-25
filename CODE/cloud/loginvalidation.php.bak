<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php


session_start();

$_SESSION['loginvalidation'] = "1";

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cloud | Sign In</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>

<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Cloud Project <small></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="register.html">Sign Up</a></li>
          <li class="active"><a class="active" href="signin.html">Sign In</a></li>
                    
        </ul>
      </div>
      <div class="clr"></div>
      <div class="htext">
        <h2>ASSURANCE ON DATA STORAGE SECURITY IN CLOUD COMPUTING</h2>
        <p></p>
        <p></p>
        <p></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
  
<?php

$connection = mysql_connect("localhost","root","");
  if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cloud", $connection);

$username=$_POST['username'];
	   
$field = 'loginfails';
$result = mysql_query("SELECT $field FROM user where username='$username' ");
$num=mysql_result($result, 0);
if($num>3)
{
	header("location: loginfails.php");
}

 ?>

<?php

$connection = mysql_connect("localhost","root","");
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cloud", $connection);
$username=$_POST['username'];
$password=$_POST['password'];


$query = mysql_query('SELECT username, password FROM user WHERE username = "'.$_POST['username'].'" AND password = "'.$_POST['password'].'" LIMIT 1', $connection); 

if (mysql_num_rows($query) > 0)
{
	$rand= rand(00000000,99999999);


	 mysql_query('UPDATE user SET otp="'.$rand.'" WHERE username = "'.$_POST['username'].'" LIMIT 1', $connection); 


print '<script type="text/javascript">'; 
print 'alert("The OTP is '.$rand.' . Please remember otp for second level of authentication.")'; 
print '</script>'; 
    



}
else

{
	mysql_query('UPDATE user SET loginfails= loginfails + 1 WHERE username = "'.$_POST['username'].'" LIMIT 1', $connection);
	header("Location: loginerror.php");


}


 
?>
  <h3> Second Level of Authentication Process</h3>
	
	<FORM METHOD=POST ACTION="account.php" id="login_form">


		  
         <OL>
         	<LI>User Name </br><INPUT TYPE="text" NAME="username"class="text" id="username"></LI></br>
         	<LI>Password </br><INPUT TYPE="password" NAME="password"class="text" id="password"> </LI></br>
			<LI>Enter OTP </br><INPUT TYPE="text" NAME="otp"> </LI></br>
			

			<li>
               <input  type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                
              </li></br></br>
         </OL>
		 


</FORM>	
		  
		  <div class="clr"></div>
<div class="article">
          
          <div class="clr"></div>
			


        </div>
      </div>
     
      <div class="clr"></div>
    </div>
  </div>





  <div class="fbg">
    <div class="fbg_resize">
	<p class="lf">&copy; Copyright ->ASSURANCE ON DATA STORAGE SECURITY IN CLOUD COMPUTING.</p>
     </div>
	 </div>
      
  </div>
</div>
<?php
session_unset();

 session_destroy();

?>
</body>
</html>
