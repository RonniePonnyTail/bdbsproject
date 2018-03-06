<?php
 
require 'connection.php';
$conn    = Connect();
$jmeno   = $conn->real_escape_string($_POST['JMENO']);
$prijmeni    = $conn->real_escape_string($_POST['PRIJMENI']);
$email   = $conn->real_escape_string($_POST['LOGIN_EMAIL']);
$heslo    = $conn->real_escape_string($_POST['HESLO']);
$query   = "INSERT into uzivatel (JMENO, PRIJMENI, LOGIN_EMAIL, HESLO) VALUES('" . $jmeno . "','" . $prijmeni . "','" . $email . "','" . $heslo . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
$conn->close();
 
?>