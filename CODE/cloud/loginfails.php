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
          <li ><a class="active" href="signin.html">Sign In</a></li>
                    
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
       
<center>

<IMG style="border-style: none;" SRC="images/warning.png" WIDTH="300" HEIGHT="200"  ALT="WARNING !">
  <font color=red><h3> Maximum Number of Attempts Reached. Contact Administrator.</h3>
	
	</center>
		</font>  
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
