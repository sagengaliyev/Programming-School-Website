<?php
 session_start();
require_once('dbase.php');
 $message="";

 try {
     $connect = $pdo;
     $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     if(isset($_POST["sign"]))
     {
         if(empty($_POST["login"]) || empty($_POST["password"]))
         {
             $message = '<label>All fields are requierd</label>';
         } else 
         {
             $query="SELECT * FROM users WHERE login = :login AND password = :password";
             $stmt=$connect->prepare($query);
             $stmt->execute(
                 array(
                     'login' => $_POST['login'],
                     'password' => $_POST['password']
                 )
            );
            $count=$stmt->rowCount();
            if($count>0)
            {
                $_SESSION["login"] = $_POST["login"];
                header("Location:user.php");
            }
            elseif($_POST['login'] === "adminbek" && $_POST['password'] === "adil")
            {
                $_SESSION["login"] = $_POST["login"];
                header("Location:admin.php");
            }
            else 
            {
                $message = '<label>Wrong data</label>';
            }
         }
     }
 } catch (PDOException $error) {
     $message = $error->getMessage();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in page</title>
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

<?php
if(isset($message))
{
    echo '<label class="text-danger">'.$message.'</label>';
}
?>
<body style="background-image:url(https://www.setwalls.ru/large/201304/12470.jpg); background-size:cover">
<br><br><br><br><br>    
<center>
 <div class="container" style="margin-top:50px;" >
<div class="row" >
<div class="col-lg-12" style="background-color:white; width:25%;height:200px;" >
    <form method="POST" >
        <br><br>
        <input type="text" placeholder="Login" name="login">
    <input type="password" placeholder="Password" name="password">
    <button type = "submit" name="sign" class = "btn btn-primary">Sign in</button><br>

    </form>
    </div>
</div>
</div>
</center>
    <!-- <h1>Please Log in</h1>
<form method="POST" >
    
    <input type="submit" name="sign" class="btn btn-info" value="Sign in">
</form> -->
</body>
</html>
