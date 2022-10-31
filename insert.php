<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database_name = 'dip_db';
    $connection = new mysqli($server_name, $user_name, $password, $database_name);
    if (isset($_POST['save']) == 'save'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $insert_query = "INSERT INTO person (name, address, mobile) VALUES('$name', '$address', '$mobile')";
        $connection->query($insert_query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB INTGRATION</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <div class='form-body'>
        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Name"><br><br>
            <input type="text" name="address" id="address" placeholder="Address"><br><br>
            <input type="text" name="mobile" id="mobile" placeholder="Mobile"><br><br>
            <button type="submit" name='save'>Submit</button>
        </form>
    </div>
</body>
</html>