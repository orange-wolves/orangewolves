<?php
  $USER     = "root"; //Connect to database
  $PASSWORD = "pass";
  $DBNAME   = "OrangeWolves";
  $conn     = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME) 
     or die("mySQL server connection failed");
?>