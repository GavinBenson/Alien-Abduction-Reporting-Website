<?php

/*
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname   = "DB_alien";
*/

OPS
 $servername = "gator4268.hostgator.com";
 $username = "mmcclend_root";
 $password = "aliens";
 $dbname = "mmcclend_DB_alien";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected using 4 parm method.";

?>
