<?php
// passing Hostname, username, password, database below.

$con = mysqli_connect("sql204.epizy.com","epiz_25759997","TKKRT61A0T75","epiz_25759997_register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
