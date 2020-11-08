<?php
    session_start();
    $database_name = "final";
    $con = mysqli_connect("localhost","final","123456789",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")
                    return false;
                    </script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: 10px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
            width:230px;
            height:420px;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body style="background-image: url(https://html5book.ru/wp-content/uploads/2015/05/background9.jpg);">
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
        </ul>
    </nav>
    </div><br>
    <!-- <a class="btn btn-sm btn-outline-secondary" style="background-color:red;color:white" href="#">Sign up</a> -->
    <?php
    if(isset($_SESSION["login"]))
    {
        echo '<a class="btn btn" style="background-color:red;color:white" >'.$_SESSION["login"].'</a>';
        echo '<br/><br/><a style="color:blue"href="logout.php">Logout</a>';
    }
    else
    {
        header("Location:login.php");
    }
    ?>
    
  </div>
</nav>
<br>
    <div class="container" style="width: 65%">
        <h2>Курсы</h2>
        <?php
            $query = "SELECT * FROM course ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h4
                                 class="text-info"><?php echo $row["name"]; ?></h4>
                                <h4 class="text-danger"><?php echo $row["price"]; ?> ₸</h4>
                                <h5 class="text-danger"><?php echo $row["description"]; ?></h5>
                                <!-- <input type="text" name="quantity" class="form-control" value="1"> -->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="13%">Price Details</th>
                <th width="17%">Remove Item</th>
            </tr>
<br><br><br><br><br><br>
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>

                            <td><?php echo $value["product_price"]; ?> ₸</td>
                            
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total +  $value["product_price"];
                    }
                        ?>
                        <tr>
                            <td colspan="1" align="right">Total</td>
                            <th align="right"> <?php echo number_format($total, 2); ?> ₸</th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>


</body>
</html>
