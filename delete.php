<?php

 $connect = mysqli_connect("localhost", "final", "123456789", "final");  
 $sql = "DELETE  FROM course WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>