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
    
    <link rel="stylesheet" href="components.css">
    <script src="script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
 <!--NAVIGATION-->
 <nav class="navbar navbar-expand-lg nav-light py-4 fixed-top">
    <div class="container">
      <a href="home.php"><img class="logo" src="icon/logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i id="bar" class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.html">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <i class="fa-solid fa-magnifying-glass"></i>
          </li>
          <li class="nav-item">
            <i class="fa-solid fa-user"></i>
          </li>


          <li class="nav-item">
            <div class="fav-counter-container">
              <i class="fa-solid fa-heart"></i>
              <div><span class="fav-counter">3</span></div>
            </div>
          </li>
          
          <li class="nav-item">
            <div class="cart-counter-container">
            <i class="fa-solid fa-cart-shopping"></i>
            <div><span class="cart-counter">3</span></div>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--NAVIGATION END-->

  <!--Home-->
<section class="home" id="home">

<div class="content">
    <h5 class="header5">NEW RESTO IN THE METRO</h5>
    <h1 class="header1"><span >BEST PRICE</span> NEW SPICE</h1>
    <p class="pdesign">Montemayor offer <strong> AUTHENTIC AMERICAN DISHES</strong> <br> at the comfort of your home!</p>
    <a href="menu.html" class="btn">Order Now</a>
</div>
<div class="image">
    <img src="background_picture/home-img.png" alt="">
</div>
</section>
<!--HOME END-->

  <section>
    <h1>HOME PAGE</h1>

    <a href="logout.php">Logout</a>
    </section>


   <!--SPECIALTY-->
   <section>
    <section class="speciality" id="speciality">

      <h1 class="heading header1"> BEST <span>SELLER</span> </h1>
  
      <div class="box-container">
  
          <div class="box">
              <img class="image" src="food_photos/cheeseburger/cheeseburger1.jpg" alt="">
              <div class="content">
                  <img src="specialty-icon/specialty-icon-1.png" alt="">
                  <h3 class="header3">Cheeseburger</h3>
                  <p>A huge cheeseburger with all the fixings, cheese, lettuce, tomato, onions, pickle, special sauce and beef patty in perfectly cook bun.</p>
              </div>
          </div>
          <div class="box">
              <img class="image" src="food_photos/key-lime-pie/keylime3.jpg" alt="">
              <div class="content">
                  <img src="specialty-icon/specialty-icon-2.png" alt="">
                  <h3 class="header3">Key Lime Pie</h3>
                  <p>Perfect crust key pie lime made with fresh lime juice, condense milk, and sour cream with whipped cream on top.</p>
              </div>
          </div>
          <div class="box">
              <img class="image" src="food_photos/hotdog/hotdog1.png" alt="">
              <div class="content">
                  <img src="specialty-icon/specialty-icon-3.png" alt="">
                  <h3 class="header3">Hotdog</h3>
                  <p>6-inch freshly cooked hotdog kept in a toasted, cream cheese-covered bun with  andouille sauce and grilled onions.</p>
                  <!--<span class="invisible-text">Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</span> -->
              </div>
          </div>
          <div class="box">
              <img class="image" src="food_photos/banana-split/banana-split1.jpeg" alt="">
              <div class="content">
                  <img src="specialty-icon/specialty-icon-4.png" alt="">
                  <h3 class="header3">Banana Split</h3>
                  <p>home-made ice cream laid on fresh banana, glazed with caramel and chocolate syrup, and finished with whipped cream and cherry.</p>
              </div>
          </div>
          <div class="box">
              <img class="image" src="food_photos/california-avocado-salad/avocadosalad2.jpg" alt="">
              <div class="content">
                  <img src="specialty-icon/specialty-icon-5.png" alt="">
                  <h3 class="header3">California Avocado Salad</h3>
                  <p>8 ounces of fresh avocado paired with barbecued vagetables and fruits tossed in a tasty, cilantro lime dressing. </p>
              </div>
          </div>
          <div class="box">
              <img class="image" src="food_photos/reuben-sandwich/reuben1.webp" alt="">
              <div class="content">
                  <img src="specialty-icon/specialty-icon-6.png" alt="">
                  <h3 class="header3">Ruben Sandwich</h3>
                  <p>Reuben sandwich features thin-sliced beef topped with melted Swiss cheese, sauerkraut, and Thousand Island dressing, on toasted marble rye bread.</p>
              </div>
          </div>
  
      </div>
  </section>
  <!--SPECIALTY END-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>