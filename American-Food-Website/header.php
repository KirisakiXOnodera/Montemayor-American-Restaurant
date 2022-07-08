<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fa-solid fa-circle-xmark" onclick="this.parentElement.remove();"></i>
        </div>
        ';

    }
}


?>

<header class="admin-header">

    <div class="admin-flex fixed-top">
      <a href="home.php"><img class="logo" src="icon/logo.png"></a>

    <nav class="adminnavbar">
        <a href="home.php">HOME</a>
        <a href="menu.php">MENU</a>
        <a href="order.php">ORDER</a>
        <a href="blog.php">BLOG</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a>
    </nav>

    <div class="admin-icon">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="user-btn" class="fas fa-user"></div>
        <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
        <div id="fav-btn" class="fa-solid fa-heart">
        <div><span class="fav-counter">3</span></div>
        </div>
        <div id="cart-btn" class="fa-solid fa-cart-shopping">
        <div><span class="counter-counter">3</span></div>
        </div>
    </div>


    <div class="profile">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>

        <img class="profile-icon" src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
        <p><?= $fetch_profile['name']; ?></p>
        <a href="user_update_profile.php" class="update-btn">Update Profile</a>
        <a href="logout.php" class="delete-btn">Logout</a>
        <div class="flex-btn">
            <a href="login.php" class="admin-btn">Login</a>
            <a href="register.php" class="admin-btn">Register</a>
        </div>


    </div>

    </div>

</header>