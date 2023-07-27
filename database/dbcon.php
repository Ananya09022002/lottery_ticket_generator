<?php

$host = "localhost" ;
$username = "root" ;
$password = "" ; 
$database = "lottery_ticket";

// Connections
$con = mysqli_connect( $host, $username, $password, $database);

// Check Connection
if(!$con)
{
    header ("Location: ../error.php");
    die();
}
?>