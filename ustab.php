<!DOCTYPE html>
<html>

<head>
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <br/>
            <table class="table table-bordered table-stiped" id="users_table">
                <tr>
                    <th style="background-color:red;color:white;font-size:24px">users_id</th>
                    <th style="background-color:red;color:white;font-size:24px">users_name</th>
                    <th style="background-color:red;color:white;font-size:24px">users_lname</th>
                    <th style="background-color:red;color:white;font-size:24px">users_email</th>
                    <th style="background-color:red;color:white;font-size:24px">users_login</th>
                    <th style="background-color:red;color:white;font-size:24px">users_password</th>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $.getJSON("users.json", function(data) {
            var users_data = '';
            $.each(data, function(key, value) {
                users_data += '<tr >';
                users_data += '<td style="width:30%;background-color:cornflowerblue;color:white;font-size:20px">' + value.users_id + '</td>';
                users_data += '<td style="width:30%;background-color:cornflowerblue;color:white;font-size:20px">' + value.users_name + '</td>';
                users_data += '<td style="width:30%;background-color:cornflowerblue;color:white;font-size:20px">' + value.users_lname + '</td>';
                users_data += '<td style="width:30%;background-color:cornflowerblue;color:white;font-size:20px">' + value.users_email + '</td>';
                users_data += '<td style="width:30%;background-color:cornflowerblue;color:white;font-size:20px">' + value.users_login + '</td>';
                users_data += '<td style="width:30%;background-color:cornflowerblue;color:white;font-size:20px">' + value.users_password + '</td>';
                users_data += '</tr>';
            });
            $('#users_table').append(users_data);
        });
    });
</script>