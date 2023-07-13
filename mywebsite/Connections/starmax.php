<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_starmax = "localhost";
$database_starmax = "maina_db";
$username_starmax = "root";
$password_starmax = "1234";
$starmax = mysql_pconnect($hostname_starmax, $username_starmax, $password_starmax) or trigger_error(mysql_error(),E_USER_ERROR); 
?>