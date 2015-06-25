<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cloud | Forgot Password</title>
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
          <li><a href="signin.html">Sign In</a></li>
                    
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
       
  

<div class="main">

    
      <div class="logo">
        <h1>Your Login Details Are </h1>
      </div>


   </div>
		  
		  <div class="clr"></div>
<div class="article">
          
          <div class="clr"></div>
			
		
<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());

mysql_select_db("cloud");
$email=$_POST['email'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];

$result = mysql_query("SELECT username, password FROM user where email='$email' AND dob='$dob' AND phone='$phone' ");
if(mysql_num_rows($result)>0)

{

while ($row = mysql_fetch_array($result, MYSQL_NUM))
	{
    
    echo "<h3>Username :<font color=red size=3>";
	echo $row[0];

	echo "</h3></font><h3>Password :<font color=red size=3>";
	echo $row[1];
	echo "</h3></font>";
    }
}
else
{
	echo "<font color=red><h3>Wrong Information Provided. Contact Admin</h3></font>";
}
  
mysql_free_result($result);
?>





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
</body>
</html>
