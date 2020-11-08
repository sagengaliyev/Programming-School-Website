<?php
session_start();
require_once('dbase.php');

if(isset($_POST["name"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["status"]) && isset($_POST["phone"]) && isset($_POST["course"]))
         {
           
             $query="INSERT INTO client (name,lname,email,phone,status,course) 
             VALUES (:name,:lname,:email,:phone,:status,:course)";
             $stmt=$pdo->prepare($query);
             $stmt->execute(
                 array(
                     ':name' => $_POST['name'],
                     ':lname' => $_POST['lname'],
                     ':email' => $_POST['email'],
                     ':phone' => $_POST['phone'],
                     ':status' => $_POST['status'],
                    ':course' => $_POST['course']
                     
                )
            );
        }
            
?>
<!DOCtype html>
<html>

<head>
    <link rel="stylesheet" href="zapisn.css">
</head>

<body>
    <!-- эмблема школы -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="width: 100%; height: 150px; border: 1px solid white">
                    <center><img style="height: 130px; width: 70%; " src="algo.jpg"></div>
                </center>

            </div>
        </div>
    </div>

    
    <!-- собрать инфу потенциального клиента -->
    <div style="float: left;">
        <div>
            <p class="pr">Здраствуйте<br><br>На этой странице вы можете записаться на пробный урок на курсы по языкам программирования<br><br>Группы будут собираться в зависимости от уровня и возраса студента<br><br>Также вы можете записаться по номеру телефона</p>
        </div>
        <form method="POST" >
        <input phone="text" name="name" placeholder="Name"><br><br>
        <input phone="text" name="lname" placeholder="Last name"><br><br>
        <input phone="text" name="email" placeholder="Email"><br><br>
        <input phone="text" name="phone" placeholder="Phone number"><br><br>
        <select size="5" name="status" id="status">
            
            <option value="Student" selected>Student</option>
            <option value="Adult">Adult</option>
           
           </select><br><br>
        <select size="5" name="course" id="course">
            
            <option value="C++" selected>C++</option>
            <option value="Swift">Swift</option>
            <option value="PHP">PHP</option>
            <option value="Frontend">HTML,CSS,JS</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="Kotlin">Kotlin</option>
            <option value="Golang">Golang</option>
            </select><br>
     
        <input type="submit" name="apply" ><br>
    </form>
        
    </div>
    
</body>

</html>