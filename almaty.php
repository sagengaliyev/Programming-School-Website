<?php
session_start();
require_once('dbase.php');

if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]))
         {
           
             $query="INSERT INTO almaty (name,phone,email) 
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
    <link rel="stylesheet" href="mitlag.css">
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

<body>
    <!-- эмблема школы -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="background-color: cornflowerblue;">
                <center>
                    <h class="txt">Школа программирования АЛГОРИТМ</h>
                </center>
            </div>
        </div>
    </div>
    <!-- фото лагеря -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <img class="imgt" src="https://www.studylab.ru/upload/Institutions/image/big/a9e89341c4564012f7a6ff7986b9e8a6.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- информация об лагере офиша -->
    <div class="container">
        <div class="row">

            <div class="col-lg-4 ">
                <img style="width: 150px;height: 150px; margin-top: 5px; " src="https://image.flaticon.com/icons/png/512/44/44569.png ">
                <h5>Лучшие лагерь<br>программирования</h5>
            </div>
            <div class="col-lg-4 ">
                <img style="width: 150px;height: 150px; margin-top: 5px; " src="https://image.flaticon.com/icons/png/512/44/44569.png ">
                <h5>Четыре часа английского</h5>
            </div>
            <div class="col-lg-4 ">
                <img style="width: 150px;height: 150px; margin-top: 5px; " src="https://image.flaticon.com/icons/png/512/44/44569.png ">
                <h5>В программе:<br>экскурсия, бассейн</h5>
            </div>
        </div>
    </div>
    <br>
    <!-- информативная доска -->
    <div class="container ">
        <div class="row ">
            <div class="col-lg-8 ">
                <img style="width: 90%; " src="https://www.openbusiness.ru/upload/iblock/1c7/lager.jpg ">
                <p>
                    В программе усиленные занятия:<br><br>Английского языка каждый день, включая занятия с носителем (США), занимательный английский и киноклуб или литературный клуб.<br><br>В литературном клубе ребята вместе с учителем будут читать книги
                    на английском языке и обсуждать их. Во время киноклуба, они будут смотреть фильмы на английском языке.<br><br>Занятия Логики, заставят детей решать сложные и интересные задачи. Экспериментальная наука включает в себя такие предметы
                    как Химия, Биология, Физика в опытах и наглядных примерах.<br><br>История войн и мира раскроет тайны прошлого и расскажет о наиболее интересных и значимых событиях в нестандартной форме (реконструкции, моделирование) Шахматы научат
                    детей последовательному и стратегическому мышлению.
                    <br><br>День Экскурсий будет включать в себя интересные места, такие как Фабрика Мороженного, Кондитерская Фабрика, Profi Land, Музей истории КазГУ и др.<br><br> Бассейн два раза в неделю.<br><br>Завтрак, Обед, Полдник включены в стоимость
                    (домашняя кухня).
                </p>
            </div>
            <div class="col-lg-4 ">
                <h3>Интересные занятия</h3>
                <h5>Ежедневные уроки английского языка с носителем (США).</h5>
                <h3>Познавательные экскурсии</h3>
                <h5>Среда — день экскурсий</h5>
                <h3>Обед</h3>
                <h5>(первое, второе, салат и напиток) и полдник (выпечка и напиток).</h5>
                <br>
                <!-- кнопка чтобы получить консультацию -->
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
    <!-- слайдшоу фотки учеников -->
    <div class="slideshow-container ">

        <div class="mySlides fade ">
            <div class="numbertext ">1 / 3</div>
            <img src="https://im.kommersant.ru/Issues.photo/RADIO/2018/06/12/KMO_165063_00003_1_t218_120309.jpg " style="width:100% ">

            <div class="text ">Наши взрослые студенты</div>
        </div>

        <div class="mySlides fade ">
            <div class="numbertext ">2 / 4</div>
            <img src="https://cdn.globaldialog.ru/_/manager/files/539/1ce6ec7551/International_Summer_Camp_Montana1_c570x428.jpg " style="width:100% ">
            <div class="text ">Младшие студенты</div>
        </div>

        <div class="mySlides fade ">
            <div class="numbertext ">3 / 4</div>
            <img src="https://tengrinews.kz/userdata/news/2017/news_324428/thumb_m/photo_223439.JPG " style="width:100% ">
            <div class="text ">Студенты на конференции Казахстанских программистов</div>
        </div>
        <div class="mySlides fade ">
            <div class="numbertext "> 4/ 4</div>
            <img src="https://sun9-37.userapi.com/c846419/v846419233/51dba/_3xGIoYkjLg.jpg " style="width:100% ">
            <div class="text ">Студенты на конференции Казахстанских программистов</div>
        </div>
        <!-- кнопка вперед назад -->
        <a class="prev " onclick="plusSlides(-1) ">&#10094;</a>
        <a class="next " onclick="plusSlides(1) ">&#10095;</a>

    </div>
    <br>
    <!-- кнопка в виде точки чтобы переключиться -->
    <div style="text-align:center ">
        <span class="dot " onclick="currentSlide(1) "></span>
        <span class="dot " onclick="currentSlide(2) "></span>
        <span class="dot " onclick="currentSlide(3) "></span>
        <span class="dot " onclick="currentSlide(4) "></span>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides ");
            var dots = document.getElementsByClassName("dot ");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none ";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active ", " ");
            }
            slides[slideIndex - 1].style.display = "block ";
            dots[slideIndex - 1].className += " active ";
        }
    </script>

</body>

</html>