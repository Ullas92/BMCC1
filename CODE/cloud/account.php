<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


session_start();

$_SESSION['login'] = $_POST['username'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cloud </title>
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
        <h1><a href="index.html">Cloud APP <small></small></a></h1> 
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          
          <li><a href="logout.php">Sign out</a></li><br>

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

$link = mysql_connect('localhost', 'root', '') OR die(mysql_error());
mysql_select_db('cloud',$link);

$username =  $_POST['username'];
$password = $_POST['password'];
$otp = $_POST['otp'];




$login = sprintf("SELECT username, password, otp FROM user WHERE username='$username' AND password='$password' AND otp='$otp'  ",
            mysql_real_escape_string($username, $link),
            mysql_real_escape_string($password, $link),mysql_real_escape_string($otp, $link));
$query=mysql_query($login) OR die(mysql_error());

            $rowcount = mysql_num_rows($query);
             

if ($rowcount > 0)
   {

echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo " WELCOME" ;
echo'&nbsp;&nbsp;&nbsp;';

echo '<strong><font color=red style="text-transform:uppercase;" >';
echo " $username ";
echo '</font></strong>';
   }
else

   {

	mysql_query('UPDATE user SET loginfails= loginfails + 1 WHERE username = "'.$_POST['username'].'" LIMIT 1', $link);
	header("location: loginerror.php");
   }
 

?>



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
	  <h1>SIMPLE E-VALLET INFO APP</h1>
      
      </div>


   </div>


		  
		  <div class="clr"></div>
<div class="article">
          
          <div class="clr"></div>


<style type="text/css">
table.sample {
	border-width: 5px;
	border-spacing: 10px;
	border-style:inset;
	border-color:#7fd0f6;
	border-collapse: separate;
	background-color:#7fd0f6 ;

}

</style>

<TABLE  class="sample" width=600 height=400>
<TR>
	<TD><center><a href="sbi.php"><IMG SRC="./images/button.png"  WIDTH="201" HEIGHT="38" BORDER="0" ALT=""></a></center></TD>
	
</TR>
<TR>
	
	<TD><center><A HREF="scci.php"><IMG SRC="./images/button (3).png" WIDTH="270" HEIGHT="38" BORDER="0" ALT=""></A></center></TD>
</TR>
<TR>
	
	<TD><center><A HREF="rbid.php"><IMG SRC="./images/button (1).png" WIDTH="391" HEIGHT="38" BORDER="0" ALT=""></A></center></TD>
</TR>
<TR>
	
	<TD><center><A HREF="rbi.php"><IMG SRC="./images/button (2).png" WIDTH="427" HEIGHT="38" BORDER="0" ALT=""></A></center></TD>
</TR>
<TR>
	
	<TD><center><A HREF="rccid.php"><IMG SRC="./images/button (4).png" WIDTH="460" HEIGHT="38" BORDER="0" ALT=""></A></center></TD>
</TR>
<TR>
	
	<TD><center><A HREF="rcci.php"><IMG SRC="./images/button (5).png" WIDTH="496" HEIGHT="38" BORDER="0" ALT=""></A></center></TD>
</TR>
</TABLE>




			
<!-- <FORM METHOD=POST ACTION="encrypt.php">


		  
         <OL>
         	<LI>User Name(For security) </br><INPUT TYPE="text" NAME="username"class="text"></LI></br>
         	<B>Enter Your Card(sample) Details :</br></B>

			<LI>Card No</br><INPUT TYPE="text" NAME="cardnumber"class="text" ></LI></br>
			<LI>Name on Card</br><INPUT TYPE="text" NAME="nameoncard"class="text"> </LI></br>
			<LI>Expiry Date</br><INPUT TYPE="text" NAME="expirydate"class="text"> </LI></br>
			<LI>CVV </br><INPUT TYPE="text" NAME="cvv"class="text"> </LI></br></br>
			
		 
<INPUT TYPE="submit" value="Encrypt">

</FORM>  -->


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
