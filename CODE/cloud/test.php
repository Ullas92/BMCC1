<?php

$connection = mysql_connect("localhost","root","");
  if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cloud", $connection);


	   
$field = 'loginfails';
$result = mysql_query("SELECT $field FROM user where username='hari' ");
$num=mysql_result($result, 0);
if($num>3)
{
	header("location: loginfails.php");
}

 ?>