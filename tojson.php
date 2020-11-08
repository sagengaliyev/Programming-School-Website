<?php
function get_data()
{
	$connect  = mysqli_connect("localhost","final","123456789","final");
	$query = "SELECT * from users";
	$result = mysqli_query($connect,$query);
	$users_data = array();
	while($row = mysqli_fetch_array($result))
	{
		$users_data[] = array(
			'users_id'=>$row["id"],
            'users_name'=>$row["name"],
            'users_lname'=>$row["lname"],
            'users_email'=>$row["email"],
            'users_login'=>$row["login"],
            'users_password'=>$row["password"],
            
        );
         

	}
	return json_encode($users_data);
}

$file_name="users" . '.json';
if(file_put_contents($file_name, get_data()))
{
	echo $file_name . ' file created';
}
else
{
	echo "error";
}
?>