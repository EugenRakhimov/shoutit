<?php
 //connect to mysql
  // echo "test";
  $con = mysqli_connect("localhost", "inter", "", "shoutit");
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQl:".mysqli_connect_error();
  }
 ?>
