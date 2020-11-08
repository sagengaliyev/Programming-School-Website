<?php
require_once "dbase.php";

if(isset($_POST['login']) && isset($_POST['password']))
{
    $insert_sql = "INSERT INTO users (name,lname,email,login,password)
    VALUES (:name, :lname, :email,:login,:password)";

    
    $stmt= $pdo->prepare($insert_sql);
    $stmt->execute 
    (
        array
        (
            ':name' => $_POST['name'],
            ':lname' => $_POST['lname'],
            ':email' => $_POST['email'],
            ':login' => $_POST['login'],
            ':password' => $_POST['password']

        )
    );
}
?>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="regist.css"> -->
<style>
    input{
        width:300px;
        height:38px;
        margin:5px;
        border-radius:5px;
        color:white;
        background-color:red;
        font-size:16spx;
    }
    ::placeholder 
    { 
  color: white;
  opacity: 1; 
}
.btn{
    color:white;
    width:150px;
    background-color:black;
}
</style>
</head>
<body style="background-image:url(https://www.setwalls.ru/large/201304/12470.jpg); background-size:cover">
<br><br><br><br><br>    
<center>
 <div class="container" >
<div class="row" >
<div class="col-lg-12" style="background-color:white; width:20%" >
    <form method="POST" >
        <br>
    <input type="text" placeholder="Firstname" name="name" required><br>
    <input type="text" placeholder="Lastname" name="lname" required><br>
    <input type="text" placeholder="Email" name="email" required><br>
    <input type="text" placeholder="Login" name="login" required><br>
    <input type="password" placeholder="Password" name="password" required><br>
    <button type = "submit"  class = "btn btn-primary">SIGN UP</button>
</input type="submit"> <h5>Already a user?<a href="login.php"> Sign in</a></h5>
    </form>
    </div>
</div>
</div>
</center>


</body>
</html>