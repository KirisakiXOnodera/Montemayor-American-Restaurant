<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/logo.png" type="image/x-icon">
    <title>Admin Desk</title>
</head>
<body>
    <h1>ADMIN PAGE</h1>

    <a href="logout.php">Logout</a>
    
</body>
</html>