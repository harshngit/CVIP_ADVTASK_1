<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section start -->
<header class="header">
<a href="home.php" class="logo"><i class="fas fa-store"></i> TechKart</a>
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="login.php" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>
</header>
<!-- header section ends -->
<!-- sidebar section starts -->
<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="images/user-img.png" alt="">
        <h3>Rohan More</h3>
        <a href="#">log out</a>
    </div>

    <nav class="navbar">
        <a href="home.php"> <i class="fas fa-angle-right"></i> home </a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about </a>
        <a href="products.php"> <i class="fas fa-angle-right"></i> products </a>
        <a href="contact.php"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="login.php"> <i class="fas fa-angle-right"></i> login </a>
        <a href="register.php"> <i class="fas fa-angle-right"></i> register </a>
        <a href="cart.php"> <i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>
<!-- sidebar section ends -->
<!-- register form section starts  -->

<section class="register">

    <form action="">
        <h3>register now</h3>
        <input type="text" name="" placeholder="enter your name" id="" class="box">
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="password" name="" placeholder="enter your password" id="" class="box">
        <input type="password" name="" placeholder="re-enter your password" id="" class="box">
        <input type="submit" value="register now" class="btn">
        <p>already have an account?</p>
        <a href="login.php" class="btn link">login now</a>
    </form>

</section>

<!-- register form section ends  -->
<!-- footer section start -->
<section class="quick-links">
    <a href="home.php" class="logo"><i class="fas fa-store"></i> Shopie </a>
    <div class="links">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="products.php">products</a>
        <a href="contact.php">contact</a>
        <a href="login.php">login</a>
        <a href="register.php">register</a>
        <a href="cart.php">cart</a>
    </div>
    <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
</section>
<section class="credit">
<p>Created by <span>@codewitharsh</span> | all rights reserved!</p>
    <img src="images/card_img.png" alt="">
</section>
<!-- footer section ends -->
<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>