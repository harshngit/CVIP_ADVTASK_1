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

<!-- contact info section starts -->
<section class="info-container">
    <div class="box-container">
        <div class="box">
            <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>mumbai ,india-4040104</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>shopie@gmail.com</p>
            <p>shopiecare@gmail.com</p>
        </div>
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p>+123-456-789</p>
            <p>+111-222-999</p>
        </div>
    </div>
</section>

<!-- contact info section ends -->
<!-- contact section starts  -->

<section class="contact">

    <form action="">
        <h3>get in touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe provident nihil non unde, quia magnam quibusdam ad obcaecati nam animi?</p>
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1638365961619!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>newsletter</h3>
        <p>subscribe for weelky newsletter.</p>
    </div>

    <form action="">
        <input type="email" name="" placeholder="enter your email" id="" class="email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->
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