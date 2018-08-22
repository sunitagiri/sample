
<?php


$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn =  mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 
//echo "Connected successfully";

 $db=mysql_select_db("art",$conn);

if (!$db) {
    die("no databse selected");
} 

mysql_set_charset("utf8");

?>