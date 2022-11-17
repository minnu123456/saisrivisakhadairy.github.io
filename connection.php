<?php
$servername = "0.tcp.in.ngrok.io:19656";
$username = "root";
$password = "";
$dbname = "boodytest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




?>