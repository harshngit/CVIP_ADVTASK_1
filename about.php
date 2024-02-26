<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

<!-- about section start -->
<section class="about">
    <div class="image">
        <img src="images/about-img.png" alt="">
    </div>
    <div class="content">
        <h3>our story</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, distinctio et? Odio voluptatum eius reprehenderit saepe quisquam excepturi molestiae architecto.</p>
        <a href="#" class="btn">read more</a>
    </div>
</section>
<!-- about section end -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to make websites?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to place order online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

    </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> clients <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, culpa non eaque illo laudantium amet. Eius beatae, consequuntur corrupti atque, quod suscipit rem maiores impedit alias labore numquam nihil nostrum.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, culpa. Ducimus quos fuga hic. Tempore!</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo placeat laborum pariatur voluptatibus tenetur impedit assumenda ex reprehenderit soluta ea fugiat error in laboriosam cum dicta consequuntur, sapiente minima quis hic deserunt magnam dignissimos.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-5.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-6.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus earum quas quo natus quis, accusamus maxime magni molestias eos. Ab nihil magnam, id inventore explicabo ducimus repudiandae unde distinctio iste!</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->


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