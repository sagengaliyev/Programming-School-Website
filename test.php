<!DOCTYPE html>

<head>
    <style>
        .maind {
            display: flex;
            width: 100%;
            justify-content: center;
            height: 40%;
            background-color: cornflowerblue;
        }
        
        h1 {
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        
        h2 {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .finish {
            background-color: cornflowerblue;
            width: 40%;
            height: 70px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            color: white;
        }
        
        .main {
            display: grid;
            justify-content: center;
        }
        
        .rule {
            transition: 0.7s;
        }
        
        body {
            background-image: url(https://html5book.ru/wp-content/uploads/2015/05/background9.jpg);
        }
        
        .txt {
            color: white;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="maind">


        <h6 class="txt">ДАВАЙТЕ ПРОВЕРИМ ВАШ УРОВЕНЬ</h6>

    </div><br>
    <script>
        function info() {
            document.getElementById("rule").innerHTML = "Отвечайте не торопясь<br>У вас будет время 30 минут<br>Удачи вам на экзамене";
            document.getElementById("rule").className = 'rule';

        }

        function push() {
            alert("Вы уверены что хотите продолжать?");

        }
    </script>
    <center>
        <!-- кнопка правила -->
        <button style="background-color: cornflowerblue; width: 200px; height: 40px; border-radius: 10px; color: white; font-size: 16; " onclick="info()">Правила
      </button>
        <div id="rule" style="font-size: 20px; background-color: none; width: 600px; height: 100px;display: flex;justify-content: center;"></div>
        <!-- вопросы -->
    </center>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="main">
                    <h3>1. Kate ____ from Germany</h3>
                    <input type="radio">is
                    <input type="radio">are
                    <input type="radio">do
                    <input type="radio">am
                    <h3>2. What's ____ name?</h3>
                    <input type="radio">is
                    <input type="radio">your
                    <input type="radio">yours
                    <input type="radio">-
                    <h3>3. Mark ______ in London.</h3>
                    <input type="radio">is work
                    <input type="radio">is working
                    <input type="radio">work
                    <input type="radio">working
                    <h3>4. I ____ like rain</h3>
                    <input type="radio">not like
                    <input type="radio">like not
                    <input type="radio">do
                    <input type="radio">do not
                    <h3>5. Katrina doesn't like ____ in the morning</h3>
                    <input type="radio">to get up
                    <input type="radio">getting up
                    <input type="radio">got up
                    <input type="radio">to getting up
                    <h3>6. Randolf can't ______ verywell</h3>
                    <input type="radio">to drive
                    <input type="radio">are drive
                    <input type="radio">driving
                    <input type="radio">drives
                    <h3>7. What ____________ at the moment?</h3>
                    <input type="radio">you do
                    <input type="radio">are you do
                    <input type="radio">are you doing
                    <input type="radio">do you do
                    <h3>8. Oliver is interested ______ art</h3>
                    <input type="radio">in
                    <input type="radio">on
                    <input type="radio">at
                    <input type="radio">to
                    <h3>9. A dog is an animal ______ walks o</h3>
                    <input type="radio">who
                    <input type="radio">which
                    <input type="radio">what
                    <input type="radio">whose
                    <h3>10. What _____ it looks delicious?</h3>
                    <input type="radio">he's eating
                    <input type="radio">is he eating
                    <input type="radio">does he eat
                    <input type="radio">he eats
                    <h3>11. Julian is ______ person I've ever met</h3>
                    <input type="radio">the nicer
                    <input type="radio">the most nice
                    <input type="radio">the nicest
                    <input type="radio">the more nice
                    <h3>12. ______ meet Paolo for lunch tomorrow.t</h3>
                    <input type="radio">I'm to
                    <input type="radio">I go to
                    <input type="radio">I going to
                    <input type="radio">I'm going to
                    <h3>13. That's the guy ______ uncle lives next door to me</h3>
                    <input type="radio">who
                    <input type="radio">which
                    <input type="radio">that
                    <input type="radio">whose
                    <h3>14. I ______ a really funny YouTube video when you called me.</h3>
                    <input type="radio">am watching
                    <input type="radio">watched
                    <input type="radio">have watched
                    <input type="radio">was watching
                    <h3>15. I'm afraid I can't meet you tomorrow. ______ lunch with an old friend</h3>
                    <input type="radio">I have
                    <input type="radio">I will have
                    <input type="radio">I'm having had
                    <input type="radio">I've had


                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- кнопка завершения теста -->
    <center>


        <button style="background-color: cornflowerblue; width: 200px; height: 40px; border-radius: 10px; color: white; font-size: 16; " onclick="push()">Завершить тест
           

        
    </center>








</body>