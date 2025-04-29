<?php
 $conn = new mysqli ("localhost", "root", "", "newsflash");
 if ($conn){
   echo "Connection Successful";
 }
 else {
   die(mysqli_error($conn));
 }

?>