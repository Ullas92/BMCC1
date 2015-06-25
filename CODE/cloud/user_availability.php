<?php


// Establish the database connection
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());

mysql_select_db("cloud");
$user_name=$_POST['user_name'];
// Issue the query
$result = mysql_query("SELECT username FROM user WHERE username='$user_name'");

//$existing_users=mysql_fetch_array($result, MYSQL_NUM); 


//checking weather user exists or not in $existing_users array
if (mysql_num_rows($result))
{
	//user name is not availble
	echo "no";
} 
else
{
	//user name is available
	echo "yes";
}
?>