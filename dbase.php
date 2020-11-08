<?php 

//--SET_EXCEPTION_HANDLER
function myException($e){
 die("<h5 style='color:red'>Connection failed!!!".$e->getMessage()."</h5>");
}
set_exception_handler("myException");

$pdo = new PDO('mysql:host=localhost;post=3306;dbname=final','final','123456789');
 echo '<h3 style="color:blue">DataBase has been connected successfully!</h3>';


 ?>