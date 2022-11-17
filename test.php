<?php
   include "./connection.php";
   $sql = "SELECT `b m 180ml_p` FROM `shop1` WHERE date='2007-05-30';";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   echo $row;
?>