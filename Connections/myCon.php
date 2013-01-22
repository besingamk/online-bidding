<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_myCon = "localhost";
$database_myCon = "online_auction_db";
$username_myCon = "root";
$password_myCon = "";
$myCon = mysql_pconnect($hostname_myCon, $username_myCon, $password_myCon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>