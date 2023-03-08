<?php
$HOST = "localhost";
$user = "root";
$pass = "";
$db_name = "logapp"; 
$connection = mysql_connect($HOST,$user,$pass,$db_name);
if (!$connection)
  {
  die('Connection not reach: ' . mysql_connect_error());
  }else{
    echo "Connection successful...";
  }

?>