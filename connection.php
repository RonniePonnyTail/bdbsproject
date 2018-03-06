<?php
 
 
function Connect()
{
 $dbhost = "den1.mysql2.gear.host";
 $dbuser = "musiclibrarydb";
 $dbpass = "Va28URjY~Q6~";
 $dbname = "musiclibrarydb";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>