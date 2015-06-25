<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cloud | Registration Successful</title>
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
        <h1><a href="index.html">Cloud Project CRM Module<small></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li ><a  href="register.html">Sign Up</a></li>
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
       
  


		  
		  <div class="clr"></div>
<div class="article">
          
          <div class="clr"></div>
			
<?php
$con = mysql_connect("localhost","root","");
$con1 = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cloud", $con);
$btname=$_POST['username']."b";
$ctname=$_POST['username']."c";
$db=$_POST['username'];
$sql="INSERT INTO user (username, password, firstname, lastname, gender, dob, email, phone, address, securityquestion, answer)
VALUES
('$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[lastname]','$_POST[gender]','$_POST[dob]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[securityquestion]','$_POST[answer]')";


$sql1="CREATE TABLE $btname (bankname varchar(128) NOT NULL, branchno varchar(128), accountholdername varchar(128) NOT NULL,accountnumber  varchar(128) ,PRIMARY KEY(accountnumber), accounttype varchar(128) NOT NULL, ifsccode  varchar(128), branchaddress varchar(128))";

$sql2="CREATE TABLE $ctname (cardnumber varchar(128),PRIMARY KEY(cardnumber), cardtype varchar(128) NOT NULL, nameoncard varchar(128) NOT NULL,expirydate  varchar(128) NOT NULL, cvv varchar(128) NOT NULL, securedpassword  varchar(128))";


if (!mysql_query($sql,$con) )
  {
  die('Error: ' . mysql_error());
  }

else
{
	mysql_query("CREATE DATABASE $db",$con1);
	mysql_select_db("$db", $con1);
mysql_query($sql1,$con1);
mysql_query($sql2,$con1);
	
}
mysql_close($con1);
mysql_close($con);
?>
      <div class="main">

    
      <div class="logo">
        <h1>Congratulations </h1><br/><h2> your account has been created successfully</h2><br/>
		<h3><a href="signin.html">Log In here...</a></h3>
      </div>


   </div>
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
