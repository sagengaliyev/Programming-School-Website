<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <script src="wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <link rel="stylesheet" href="mainpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Школа программирования Алгоритм</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="yazyk.css">
    <script src="wow.min.js"></script>
    <script>
        new WOW().init();

        function but() {
            alert("Подтвердите действие")
        }
    </script>

    <title>Языки программирования</title>
</head>

<body>
<nav id="main-nav">
        <ul>
            <li>
                <a href="test.php">ТЕСТИРОВАНИЕ</a>
            </li>
            <li>
                <a href="about.php">О ШКОЛЕ</a>
            </li>
            <li>
                <a href="courses.php">КУРСЫ
                    <span class="arrow"></span>
                </a>
                
            </li>
            <li>
                <a href="#">ЛАГЕРЬНЫЕ ПРОГРАММЫ
                    <span class="arrow">&#x25BC;</span>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="chehia.php">ЛАГЕРЬ В ЧЕХИИ</a>
                    </li>
                    <li>
                        <a href="almaty.php">ЛАГЕРЬ В АЛМАТЫ</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contacts.php">КОНТАКТЫ</a>
            </li>
            <li>
                <a href="regist.php">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </li>
        </ul>
    </nav>
    </div><br>
    <!-- Ознакомление курсов -->
    
<div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">
                <?php  
 $connect = mysqli_connect("localhost", "final", "123456789", "final");  
 $output = '';  
 $sql = "SELECT * FROM course ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                       
                     <th width="30%">Name</th>   
                     <th width="10%">Price</th>
                     <th width ="40%">Description</th>
                     <th width ="30%">Image</th>
                       
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                      
                     <td class="name" data-id1="'.$row["name"].'" >'.$row["name"].'</td>  
                     <td class="code" data-id2="'.$row["id"].'" >'.$row["price"].'</td> 
                     <td class="price" data-id2="'.$row["id"].'" >'.$row["description"].'</td>
                     <td class="feature" data-id2="'.$row["id"].'" ><img src="'.$row["image"].'" width="150"</td>     
                    
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="description" contenteditable></td>  
                <td id="price" contenteditable></td>  
                <td id="image" contenteditable></td> 
               
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  
    
</body>

</html>