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
    $rating = $_POST['rating'];
    $rating = filter_var($rating, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);
 
    $select_review = $conn->prepare("SELECT * FROM `review` WHERE name = ? AND rating = ? AND message = ?");
    $select_review->execute([$name, $rating,  $msg]);
 
    if($select_review->rowCount() > 0){
       $message[] = 'Already sent review!';
    }else{
 
       $select_review = $conn->prepare("INSERT INTO `review`(user_id, name, rating, message) VALUES(?,?,?,?)");
       $select_review->execute([$user_id, $name, $rating, $msg]);
 
       $message[] = 'Sent review successfully!';
 
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
    <title>Blog</title>
</head>
<body>
  <?php include 'header.php' ?>

  <section class="reviewpage">
    <h1 class="title">REVIEW</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="box-container">
        <div class="inputBox">
            <span>Name</span>
            <input type="text" name="name" class="box" required placeholder="Full Name">
        </div>
        <div class="inputBox">
            <span>Ratings</span>
            <select name="rating" class="box" required>
                <option value="" selected disabled hidden>Choose</option>
                <option value="Awful">Awful</option>
                <option value="Bad">Bad</option>
                <option value="Average">Average</option>
                <option value="Good">Good</option>
                <option value="Best">Best</option>
            </select>
        </div>
            <span>Message</span>
            <textarea name="msg" required placeholder="Write here!"></textarea>
            <input type="submit" name="send" value="Send" class="admin-btn">
    </div>
    </form>


  </section>

    <section class="messages">

        <h1 class="title">REVIEW <span>SECTION</span></h1>
 
        <div class="box-container">
        <?php
            $select_review = $conn->prepare("SELECT * FROM `review`");
            $select_review->execute();
            if($select_review->rowCount() > 0){
            while($fetch_review = $select_review->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="box">
            <p><strong>Name : </strong><span><?= $fetch_review['name']; ?></span> </p>
            <p><strong>Rating : </strong><span><?= $fetch_review['rating']; ?></span> </p>
            <p><strong>Review : </strong><span><?= $fetch_review['message']; ?></span> </p>
        </div>

        <?php
            }
            }else{
                echo '<p class="empty">No review!</p>';
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