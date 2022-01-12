<?php

/**
 * @file
 * A single location to store configuration.
 */



$mysql_host= "localhost";
$mysql_login = "syanhnet_bhs";
$mysql_password = "nZ.Q;?)o,43*";
$my_database = "syanhnet_dar";
$link = mysql_connect("$mysql_host", "$mysql_login", "$mysql_password")
or die ("Could not connect to MySQL");

mysql_select_db ("$my_database")
  or die ("Could not select database");
//    function Security($value)
//   {
//      if (!isset($value)) {
// echo "         <META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php' >";
 
// 	exit;
// }  
//   }

//  error_reporting(0);

//  ini_set('display_errors', 0);
 
 
  ?>
