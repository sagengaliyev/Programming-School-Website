<?php
session_start();
require_once('dbase.php');

if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]))
         {
           
             $query="INSERT INTO chehia (name,phone,email) 
             VALUES (:name,:phone,:email)";
             $stmt=$pdo->prepare($query);
             $stmt->execute(
                 array(
                     ':name' => $_POST['name'],
                     ':phone' => $_POST['phone'],
                     ':email' => $_POST['email']
                    
                     
                )
            );
        }
            
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lagcheh.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<script>
    function but() {
        alert('Подтвердите действие на сайте algorithm.kz')
    }
</script>
</head>

<body>
    <!-- фото детей -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img class="img" src="https://www.educationcenter.cz/assets/images/leto/prague-education-center-kanikuly-praga-pec-poyezdka-v-drezden-131.jpg">
            </div>
        </div>
    </div>
    <br>
    <!-- для кого предзначен лагерь -->
    <center>
        <div class="container">
            <div class="row">
                <!-- 3 контента бутстрапа -->
                <div class="col-sm-3" style="background-image: url(https://n1s2.hsmedia.ru/7f/17/48/7f17489661079dc30e03746af1750977/440x326_21_132aba72c4ade3c4738fcbda124199ea@680x470_0xc0a8392b_4041907221428426936.jpg);width: 300px;height: 300px;">
                    <div style="background-color: white;opacity: .9; width: 100%;">
                        <h4>Young learners 8-11</h4>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-sm-3" style="background-image: url(https://images11.cosmopolitan.ru/upload/img_cache/065/065cfd82246c1bbcb0acc15dc5283444_ce_738x490x0x0_fitted_740x0.jpg);width: 300px;height: 300px;">
                    <div style="background-color: white;opacity: .9; width: 100%;">
                        <h4 style="color: red;">Juniors 11-17</h4>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-sm-3" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxBz_9f1Q93tKfuqXwXj0VCadFRqXIePj9gAu-hRwhOErXIAvE);background-size:cover;width: 300px;height: 300px;">
                    <div style="background-color: white;opacity: .9; width: 100%;">
                        <h4 style="color: royalblue;">Adults 18+</h4>
                    </div>
                </div>

            </div>
        </div>

    </center>
    <br>
    <!-- информативная доска -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Почему выбирают нас?</h1>
                <p style="font-size:22px;">
                    Смешанные группы студентов более чем с 50 стран мира<br><br>Студенты заняты 7 дней в неделю<br><br>Проживание в собственных кампусах на своей территории<br><br>Мини-группы (8-16 человек)<br><br>Работаем с 1969 года<br><br>Интересные
                    экскурсии по выходным<br><br>Большое разнообразие курсов</p>
            </div>
            <!-- кнопка получить консультацию -->
            <div class="col-sm-4">
                <div class="ost ">
                <form method="POST" >
        <input phone="text" name="name" placeholder="Full name"><br><br>
        <input phone="text" name="phone" placeholder="Phone number"><br><br>
        <input phone="text" name="email" placeholder="Email"><br><br>
        
        
     
     
        <input type="submit" name="apply" ><br>
    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- напоминание если есть вопросы инфа -->
    <div class="wow fadeInLeft" data-wow-duration="2s" style="float: right;">
        <h2>Если есть вопросы звоните:+7 777 505 2002</h2>
    </div>
</body>

</html>