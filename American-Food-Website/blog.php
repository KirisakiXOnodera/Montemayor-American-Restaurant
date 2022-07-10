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
    <title>Blog</title>
</head>
<body>
  <?php include 'header.php' ?>

  <!--BLOG-->
  <section id="blog">
    <div class="blog-heading">
      <span>Recent Posts</span>
      <h3>MONTEMAYOR BLOG</h3>
    </div>

     <!--Box 1-->
    <div class="blog-container">
      <div class="blog-box">
        <div class="blog-img">
          <img src="food_photos/banana-split/banana-split5.jpg" alt="">
        </div>

        <div class="blog-text">
          <span>18 July 2022 / Food Review</span>
          <a href="" class="blog-title">Montemayor is the best newly opened restaurant in Metro Manila!</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab eius sint doloremque, non laudantium earum fuga minima veniam amet aperiam?</p>
          <a href="" class="blog-extension">Read More</a>
        </div>
      </div>

      <!--Box 2-->
      <div class="blog-box">
        <div class="blog-img">
          <img src="food_photos/apple-pie/apple-pie3.jpg" alt="">
        </div>

        <div class="blog-text">
          <span>30 June 2022 / Food Review</span>
          <a href="" class="blog-title">Montemayor is the best newly opened restaurant in Metro Manila!</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab eius sint doloremque, non laudantium earum fuga minima veniam amet aperiam?</p>
          <a href="" class="blog-extension">Read More</a>
        </div>
      </div>

      <!--Box 3-->
      <div class="blog-box">
        <div class="blog-img">
          <img src="food_photos/macaroni-and-cheese/mac4.webp" alt="">
        </div>

        <div class="blog-text">
          <span>1 July 2022 / Food Review</span>
          <a href="" class="blog-title">Montemayor is the best newly opened restaurant in Metro Manila!</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab eius sint doloremque, non laudantium earum fuga minima veniam amet aperiam?</p>
          <a href=""  class="blog-extension">Read More</a>
        </div>
      </div>

    </div>

  </section>

  <!--BLOG END-->



  <?php include 'footer.php' ?>
  <script src="script.js"></script>


   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>