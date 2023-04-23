
<header class="header">
        <div class="flex">
            <a href="index.php" class="logo"><img src="img/logo.png"></a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="index.php">Menu</a>
                <a href="index.php">orders</a>
                <a href="contact.php">Contact us</a>
            </nav>
            <div class="icons">
                <i class="bx bxs-user" id="user-btn"></i>
                <a href="index.php" class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
                <a href="index.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup>0</sup></a>
                <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
            </div>
            <div class="user-box">
                <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                <a href="login.php" class="btn">login</a>
                <a href="register.php" class="btn">register</a>
                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">log out</button>
                </form>
            </div>
        </div>
</header>
