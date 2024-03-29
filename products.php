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
<!-- category section start -->
<section class="category">
    <h1 class="heading">Shop by <span>Category</span></h1>
    <div class="box-container">
        
        <a href="#" class="box">
            <img src="images/cat_img1.png" alt="">
            <h3>television</h3>
        </a>
        <a href="#" class="box">
            <img src="images/cat_img2.png" alt="">
            <h3>smartphones</h3>
        </a>
        <a href="#" class="box">
            <img src="images/cat_img3.png" alt="">
            <h3>headphones</h3> 
        </a>
        <a href="#" class="box">
            <img src="images/cat_img4.png" alt="">
            <h3>smartwatch</h3>
        </a>
        <a href="#" class="box">
            <img src="images/cat_img5.png" alt="">
            <h3>games</h3>
        </a>
        <a href="#" class="box">
            <img src="images/cat_img6.png" alt="">
            <h3>camera</h3>
        </a>
        <a href="#" class="box">
            <img src="images/cat_img7.png" alt="">
            <h3>speakers</h3>
        </a>

    </div>
</section>
<!-- category section ends -->
<!-- products section starts  -->

<section class="products">

    <h1 class="heading"> featured <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/product-1.jpg" class="main-img" alt="">
                <img src="images/product-1-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>smartphone</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-2.jpg" class="main-img" alt="">
                <img src="images/product-2-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>camera</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-3.jpg" class="main-img" alt="">
                <img src="images/product-3-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>television</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-4.jpg" class="main-img" alt="">
                <img src="images/product-4-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>speaker</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-5.jpg" class="main-img" alt="">
                <img src="images/product-5-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>speaker</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-6.jpg" class="main-img" alt="">
                <img src="images/product-6-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>smartwatch</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-7.jpg" class="main-img" alt="">
                <img src="images/product-7-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>headphone</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-8.jpg" class="main-img" alt="">
                <img src="images/product-8-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>smartphone</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-9.jpg" class="main-img" alt="">
                <img src="images/product-9-hover.jpg" class="hover-img" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-search-plus"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>camera</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- products section ends -->

<!-- product banner section starts  -->

<section class="product-banner">

    <h1 class="heading"> <span>deal</span> of the day </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/product-banner-1.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/product-banner-2.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

    </div>
    
</section>

<!-- product banner section ends -->








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