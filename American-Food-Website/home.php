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
    <title>Home</title>
</head>
<body>
<?php include 'header.php' ?>
    <!--Home-->
    <section class="home" id="home">

    <div class="content">
        <h5 class="margin-media header5">NEW RESTO IN THE METRO</h5>
        <h1 class="header1"><span >BEST PRICE</span> NEW SPICE</h1>
        <p class="pdesign">Montemayor offer <strong> AUTHENTIC AMERICAN DISHES</strong> <br> at the comfort of your home!</p>
        <a href="menu.php" class="btn">Order Now</a>
    </div>
    <div class="image">
        <img src="background_picture/home-img.png" alt="">
    </div>
    </section>
    <!--HOME END-->

<!--CATEGORY-->
<section class="home-category">

<h1 class="title">SHOP BY <span>CATEGORY</span></h1>

<div class="box-container">

   <div class="box">
      <img src="food_photos/banana-split/banana-split1.jpeg" alt="">
      <h3>Dessert</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
      <a href="category.php?category=Dessert" class="shop-btn">Dessert</a>
   </div>

   <div class="box">
      <img src="food_photos/cheeseburger/cheeseburger1.jpg" alt="">
      <h3>Snack</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
      <a href="category.php?category=Snack" class="shop-btn">Snack</a>
   </div>

   <div class="box">
      <img src="food_photos/barbecue-ribs/bbqribs2.jpg" alt="">
      <h3>Meal</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
      <a href="category.php?category=Meal" class="shop-btn">Meal</a>
   </div>

   <div class="box">
      <img src="food_photos/california-avocado-salad/avocadosalad1.jpg" alt="">
      <h3>Salad</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
      <a href="category.php?category=Salad" class="shop-btn">Salad</a>
   </div>

</div>

</section>
<!--CATEGORY END-->

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
                  <p>A huge cheeseburger with all the fixings, cheese, lettuce, tomato, onions and special sauce or mayonnaise.</p>
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

  <!--STEP-->
  <div class="step-container">

    <h1 class="heading">HOW IT <span>WORKS</span></h1>

    <section class="steps">

        <div class="box">
            <img src="step-icon/step-1.jpg" alt="">
            <h3 class="header3">CHOOOSE YOUR FAVORITE FOOD</h3>
        </div>
        <div class="box">
            <img src="step-icon/step-2.jpg" alt="">
            <h3 class="header3">FAST DELIVERY</h3>
        </div>
        <div class="box">
            <img src="step-icon/step-3.jpg" alt="">
            <h3 class="header3">EASY PAYMENY METHODS</h3>
        </div>
        <div class="box">
            <img src="step-icon/step-4.jpg" alt="">
            <h3 class="header3">ENJOY YOUR FOOD!</h3>
        </div>
    
    </section>

</div>
  <!--STEP END-->

  <!--REVIEW-->
  <section class="review" id="review">

    <h1 class="heading header1"> CUSTOMER <span>REVIEW</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="review-picture/review1.jpg" alt="">
            <h3 class="header3">Noel Libardo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p class="pdesign"> First time in Montemayor and YOU have to go! The Cheeseburger is to die for. IT WAS FIRE!! The service we received was so amazing and we will definitely be back again. </p>
        </div>
        <div class="box">
            <img src="review-picture/review2.jpg" alt="">
            <h3 class="header3">Matthew Marcos</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p class="pdesign">It<span>&#39;</span>s a great experience. The ambiance is very welcoming and charming. Amazing food and service. Staff are extremely knowledgeable and make great recommendations.</p>
        </div>
        <div class="box">
            <img src="review-picture/review3.jpg" alt="">
            <h3 class="header3">Vincent Mamansag</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p class="pdesign">This spot gives extraordinary service and yummy meals. One of my favourite restaurants around Metro Manila. The meals served rapidly and the rates were reasonable. Highly recommended.</p>
        </div>

    </div>

</section>
  <!--REVIEW END-->

<?php include 'footer.php' ?>
<script src="script.js"></script>


   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>