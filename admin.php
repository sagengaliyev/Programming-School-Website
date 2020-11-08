<!DOCTYPE html>
<html>
<head>
    <title>Admin page</title>
    <link rel="stylesheet" href="course.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
      input {
    background-color: cornflowerblue;
    border-radius:5px;
    color:white;
    font-size:24px;
    height:40px;
}
    </style>
</head>

<body style="background-image: url(https://html5book.ru/wp-content/uploads/2015/05/background9.jpg);">
<div>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="course.php">Courses</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <!-- <a class="btn btn-sm btn-outline-secondary" style="background-color:red;color:white" href="#">Sign up</a> -->
    <a class="btn btn-outline-primary" style="background-color:white;color:black" >WELCOME ADMIN</a>
    <a href="logout.php">Logout</a>
  </div>
</nav>
</div>

<br>

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
                     <th width="10%">Id</th>  
                     <th width="30%">Name</th>   
                     <th width="10%">Price</th>
                     <th width ="40%">Description</th>
                     <th width ="30%">Image</th>
                     <th width="10%">DELETE</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["name"].'" >'.$row["name"].'</td>  
                     <td class="code" data-id2="'.$row["id"].'" >'.$row["price"].'</td> 
                     <td class="price" data-id2="'.$row["id"].'" >'.$row["description"].'</td>
                     <td class="feature" data-id2="'.$row["id"].'" ><img src="'.$row["image"].'" width="150"</td>     
                    <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
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
                     
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"delete.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
   
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>
 <?php require('ustab.php'); ?>
</body>