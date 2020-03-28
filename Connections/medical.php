<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_medical = "localhost";
$database_medical = "medical";
$username_medical = "root";
$password_medical = "";
$medical = mysql_pconnect($hostname_medical, $username_medical, $password_medical) or trigger_error(mysql_error(),E_USER_ERROR); 
?>