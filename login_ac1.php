<?php 

error_reporting(E_ALL);
ini_set("display_errors", 0);

// mysql account info
$host = "localhost";
$user = "root";
$pass = "";
$db = "online_auction_db";

// mysql connection
mysql_connect("$host", "$user", "$pass")or die("Cannot Connect");
mysql_select_db("$db")or die("Cannot connect db");

// $_post
$username = $_POST['username'];
$password = $_POST['password'];

// protection to mysql injection
$myusername = mysql_real_escape_string(strip_tags($username));
$mypassword = mysql_real_escape_string(strip_tags($password));

// mysql select
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysql_query($sql);

// mysql num row
$count = mysql_num_rows($result);

if($count==1){
	// Register username, password and redirect to file "login_success.php"
	session_register($myusername);
	session_register($mypassword);
	header("Location:login_success.php");
}else {
	echo "error";
}

?>