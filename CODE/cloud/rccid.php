<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


session_start();

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




$display = $_SESSION['login'] ;
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo " WELCOME" ;
echo'&nbsp;&nbsp;&nbsp;';

echo '<strong><font color=red style="text-transform:uppercase;" >';

echo $display;
echo '</font></strong>';

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
<h3>Stored Credit Card Records With Decryption :</h3>
<table border=2 bordercolor="#7fd0f6" width=980>
<thead>
<tr><td><h3>Card Number</h3></td><td><h3>Card Type</h3></td><td><h3> Name On Card</h3></td><td> <h3>Expiry Date</h3></td><td><h3> CVV</h3></td><td><h3>Secured Password</h3></td></tr></thead>
<?php
$ctname=$_SESSION['login']."c";
// Establish the database connection
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
$db=$_SESSION['login'];
mysql_select_db("$db");

// Issue the query
$result = mysql_query("SELECT * FROM $ctname");


class Encryption {
    var $skey = "hariprasadmtechcsemrcet"; // you can change it

    public  function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }

    public function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    public  function encode($value){ 
        if(!$value){return false;}
        $text = $value;
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->skey, $text, MCRYPT_MODE_ECB, $iv);
        return trim($this->safe_b64encode($crypttext)); 
    }

    public function decode($value){
        if(!$value){return false;}
        $crypttext = $this->safe_b64decode($value); 
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->skey, $crypttext, MCRYPT_MODE_ECB, $iv);
        return trim($decrypttext);
    }
}


$converter = new Encryption;
    
if(mysql_num_rows($result)>0)

{



// Capture the result in an array, and loop through the array
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    // Print each row as HTML: <tr><td>row 0</td><td>row 1</td>
    printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $converter->decode($row[0]), $converter->decode($row[1]),$converter->decode($row[2]),$converter->decode($row[3]),$converter->decode($row[4]),$converter->decode($row[5]));  
}}
else
{
	echo "<font color=red><h3>NO DATA PRESENT</h3></font>";
}
// Free the result set    
mysql_free_result($result);
?>
</table>
</br></br>			
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
