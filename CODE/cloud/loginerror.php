<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

// Inialize session
session_start();


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
 <font color=red><h3><strong>!</strong> Username and password are notmatching</h3>

   <h6>Maximum Three Attempts allowd.. After that Account Will be locked !</h6></font>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">


    
		    
	
	<FORM METHOD=POST ACTION="loginvalidation.php" id="login_form">


         <OL>
         	<LI>User Name </br><INPUT TYPE="text" NAME="username"class="text" id="username"></LI></br>
         	<LI>Password </br><INPUT TYPE="password" NAME="password"class="text" id="password"> </LI></br>
			
			<a href="forgot.html">Forgot password?</a><br/>

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
</body>
</html>
