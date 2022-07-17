<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);
 
    $select_message = $conn->prepare("SELECT * FROM `message` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_message->execute([$name, $email, $number, $msg]);
 
    if($select_message->rowCount() > 0){
       $message[] = 'Already sent message!';
    }else{
 
       $insert_message = $conn->prepare("INSERT INTO `message`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
       $insert_message->execute([$user_id, $name, $email, $number, $msg]);
 
       $message[] = 'Sent message successfully!';
 
    }
 
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
    <title>Contact</title>
</head>
<body>
  <?php include 'header.php' ?>

  <section class="contact">
    <div class="content">
      <h2 class="header2">CONTACT US</h2>
      <p class="pdesign">Have any questions? Send us a message!</p>
    </div>
    <div class="container1">
      <div class="contactinfo">
        <div class="box">
          <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
          <div class="text">
            <h3 class="header3">Address</h3>
            <p class="pdesign para-color">P329+G36, Lower Ground Fairview Mall Center, <br>Commonwealth Avenue Corner Regalado Avenue <br>Fairview, Quezon City, 1121 Metro Manila</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa-solid fa-phone"></i></div>
          <div class="text">
            <h3 class="header3">Phone</h3>
            <p class="pdesign para-color">09094523478</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa-solid fa-envelope"></i></div>
          <div class="text">
            <h3 class="header3">Email</h3>
            <p class="pdesign para-color">montemayor@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="contactform">
        <form action="" method="POST">
          <h2 class="header2">Send Message</h2>
          <div class="inputbox">
            <input type="text" name="name" required="required">
            <span>Full Name</span>
          </div>
          <div class="inputbox">
            <input type="text" name="email" required="required">
            <span>Email</span>
          </div>
          <div class="inputbox">
            <input type="number" name="number" min="0" required="required">
            <span>Number</span>
          </div>
          <div class="inputbox">
            <textarea name="msg" required="required"></textarea>
            <span>Type your Message...</span>
          </div>
          <div class="inputbox">
            <input type="submit" name="send" value="Send">
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php' ?>
  <script src="script.js"></script>


   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>