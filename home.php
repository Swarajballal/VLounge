<?php
    include 'components/connection.php';
?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Vidyalankar Institute Of Technology</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <section class="home-section">
            <div class="slider">
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>V-Lounge</h1>
                        <P>Home Away from Home </P>
                        <a href="view_products.php" class="btn">Order Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome</h1>
                        <P>GOOD FOOD GOOD MOOD</P>
                        <a href="view_products.php" class="btn">Order Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide3">
                    <div class="overlay"></div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide4">
                    <div class="overlay"></div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="slider__slider slide5">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Dont Scroll</h1>
                        <P>Order Now!!</P>
                        <a href="view_products.php" class="btn">Order Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- slide end -->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>
        <!--home slider end -->
        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/1.png">
                    <h3>Dosa</h3>
                    <p>Golden, crispy dosa with tangy sambar and coconut chutney.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            <div class="box">
                <img src="img/2.png">
                <h3>Veg Thali</h3>
                <p>A colorful and flavorful feast for vegetarians.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="img/3.png">
                <h3>Chinese</h3>
                <p>A fusion of Indian and Chinese flavors in every bite.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="img/4.png">
                <h3>Veg Pizza</h3>
                <p>A delicious slice of heaven with your favorite toppings.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            </div>
        </section>
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/vada_pav.png">
                </div>
                <div class="box">
                    <img src="img/logo3.png">
                    <span>Cheese Vada Pav</span>
                        <h1>Save upto 30%</h1>
                    <p>Indulge in the rich and savory taste of Cheese Padav.</p>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="title">
                <img src="img/logo3.png">
                <h1>Trending Menu</h1>
            </div>
            <div class="row">
                <img src="img/1.png">
                <div class="row-detail">
                    <img src="img/logo3.png">
                    <div class="top-footer">
                        <h1>a cup of coffee makes you attentive</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="">
                    <a href="view_products.php">Order Now</a>
                </div>
                <div class="box">
                    <img src="">
                    <a href="view_products.php">Order Now</a>
                </div>
                <div class="box">
                    <img src="">
                    <a href="view_products.php">Order Now</a>
                </div>
                <div class="box">
                    <img src="">
                    <a href="view_products.php">Order Now</a>
                </div>
                <div class="box">
                    <img src="">
                    <a href="view_products.php">Order Now</a>
                </div>
                <div class="box">
                    <img src="">
                    <a href="view_products.php">Order Now</a>
                </div>
            </div>
        </section>
        <?php include 'components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>

</body>
</html>


