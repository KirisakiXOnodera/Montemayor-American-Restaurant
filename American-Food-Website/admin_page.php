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

    <link rel="stylesheet" href="admin_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<?php include 'admin_header.php';?>

    <section class="dashboard">
        <h1 class="title">DASHBOARD</h1>

        <div class="box-container">

            <div class="box">
            <?php
                $total_pendings = 0;
                $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
                $select_pendings->execute(['pending']);
                $number_of_pendings = $select_pendings->rowCount();
            ?>
            <h3><?=$number_of_pendings; ?></h3>
            <p>Pending Orders</p>
            <a href="admin_orders.php" class="admin-btn">see orders</a>
            </div>

            <div class="box">
            <?php
                $total_pendings = 0;
                $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
                $select_pendings->execute(['pending']);
                while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
                $total_pendings += $fetch_pendings['total_price'];
                };
            ?>
            <h3>₱<?= $total_pendings; ?></h3>
            <p>Total Amount of Pending Order</p>
            <a href="admin_orders.php" class="admin-btn">see orders</a>
            </div>

            <div class="box">
            <?php
                $total_completed = 0;
                $select_completed = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
                $select_completed->execute(['completed']);
                $number_of_completed = $select_completed->rowCount();
            ?>
            <h3><?= $number_of_completed; ?></h3>
            <p>Completed Orders</p>
            <a href="admin_orders.php" class="admin-btn">see orders</a>
            </div>

            <div class="box">
            <?php
                $total_completed = 0;
                $select_completed = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
                $select_completed->execute(['completed']);
                while($fetch_completed = $select_completed->fetch(PDO::FETCH_ASSOC)){
                $total_completed += $fetch_completed['total_price'];
                };
            ?>
            <h3>₱<?= $total_completed; ?></h3>
            <p>Total Amount of Complete Order</p>
            <a href="admin_orders.php" class="admin-btn">see orders</a>
            </div>

            <div class="box">
            <?php
                $select_orders = $conn->prepare("SELECT * FROM `orders`");
                $select_orders->execute();
                $number_of_orders = $select_orders->rowCount();
            ?>
            <h3><?= $number_of_orders; ?></h3>
            <p>Orders Placed</p>
            <a href="admin_orders.php" class="admin-btn">see orders</a>
            </div>

            <div class="box">
            <?php
                $select_products = $conn->prepare("SELECT * FROM `products`");
                $select_products->execute();
                $number_of_products = $select_products->rowCount();
            ?>
            <h3><?= $number_of_products; ?></h3>
            <p>Products Added</p>
            <a href="admin_products.php" class="admin-btn">see products</a>
            </div>

            <div class="box">
            <?php
                $select_accounts = $conn->prepare("SELECT * FROM `users`");
                $select_accounts->execute();
                $number_of_accounts = $select_accounts->rowCount();
            ?>
            <h3><?= $number_of_accounts; ?></h3>
            <p>Total Accounts</p>
            <a href="admin_users.php" class="admin-btn">see accounts</a>
            </div>

            <div class="box">
            <?php
                $select_messages = $conn->prepare("SELECT * FROM `message`");
                $select_messages->execute();
                $number_of_messages = $select_messages->rowCount();
            ?>
            <h3><?= $number_of_messages; ?></h3>
            <p>Total Messages</p>
            <a href="admin_contacts.php" class="admin-btn">see messages</a>
            </div>

        </div>

    </section>    





<script src="script.js"></script>

</body>
</html>