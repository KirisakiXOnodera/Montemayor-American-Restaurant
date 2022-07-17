<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
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
    
    <link rel="stylesheet" href="visual.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Order</title>
</head>
<body>
  <?php include 'header.php' ?>


  <section class="placed-orders">

  <h1 class="title">ORDER</h1>

   <div class="box-container">

   <?php
      $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
      $select_orders->execute([$user_id]);
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <p> <strong>Placed on :</strong><span><?= $fetch_orders['placed_on']; ?></span> </p>
      <p> <strong>Name : </strong><span><?= $fetch_orders['name']; ?></span> </p>
      <p> <strong>Number : </strong><span><?= $fetch_orders['number']; ?></span> </p>
      <p> <strong>Email : </strong><span><?= $fetch_orders['email']; ?></span> </p>
      <p> <strong>Address : </strong><span><?= $fetch_orders['address']; ?></span> </p>
      <p> <strong>Payment method : </strong><span><?= $fetch_orders['method']; ?></span> </p>
      <p> <strong>Orders : </strong><span><?= $fetch_orders['total_products']; ?></span> </p>
      <p> <strong>Total price : </strong><span>₱<?= $fetch_orders['total_price'] + 50; ?></span> </p>
      <p> <strong>Order status : </strong><span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">No orders placed yet!</p>';
   }
   ?>

   </div>

   </section>



  <?php include 'footer.php' ?>
  <script src="script.js"></script>


   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>