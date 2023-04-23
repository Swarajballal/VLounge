<?php
    include 'components/connection.php';
    session_start();
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: login.php");
    }
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
    <title>V-Lounge Contact Us</title>
</head>
<body>
<?php include 'components/header.php'; ?>
<div class="main">
    <div class="banner">
        <h1>Contact us</h1>
    </div>
    <div class="title2">
        <a href="index.php">home</a><span>/ contact us</span>
    </div>
    <section class="services">
        <div class="box-container">
            <div class="box">
                <img src="https://img.icons8.com/ios/250/000000/get-cash--v1.png"/>
                <div class="detail">
                    <h3>Great Savings</h3>
                    <p>Save big every order</p>
                </div>
            </div>
            <div class="box">
                <img src="https://img.icons8.com/ios/250/000000/last-12-hours.png"/>
                <div class="detail">
                    <h3>12:00Pm-5:00Pm</h3>
                    <p>One-on-One support</p>
                </div>
            </div>
            <div class="box">
                <img src="https://img.icons8.com/external-bearicons-detailed-outline-bearicons/64/000000/external-Voucher-summer-sales-bearicons-detailed-outline-bearicons.png"/>
                <div class="detail">
                    <h3>Student Vouchers</h3>
                    <p>Vouchers on every festivals</p>
                </div>
            </div>
            <div class="box">
                <img src="https://img.icons8.com/quill/50/0f2c44/deliver-food--v2.png"/>
                <div class="detail">
                    <h3>On campus delivery</h3>
                    <p>VIT VSIT VP</p>
                </div>
            </div>
        </div>
    </section>
    <div class="main-container">
        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/80/null/external-contact-us-contact-and-message-itim2101-lineal-color-itim2101-1.png" class="logo"/>
                    <h1>leave a message</h1>
                </div>
                <div class="input-field">
                    <p>your name <sup>*</sup></p>
                    <input type="text" name="name">
                </div>
                <div class="input-field">
                    <p>your email <sup>*</sup></p>
                    <input type="email" name="email">
                </div>
                <div class="input-field">
                    <p>your number <sup>*</sup></p>
                    <input type="text" name="number">
                </div>
                <div class="input-field">
                    <p>your message <sup>*</sup></p>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
        </div>
    </div>
    <div class="address">
        <div class="title">
            <img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/80/null/external-contact-us-contact-and-message-itim2101-lineal-color-itim2101-1.png" class="logo"/>
            <h1>contact details</h1>
            <p>"Reach out to us and savor the taste of convenience with V-Lounge's contact options."</p>
        </div>
        <div class="box-container">
            <div class="box">
                <i class="bx bxs-map-pin"></i>
                <div>
                    <h4>address</h4>
                    <p>VIT Sangamnagar Wadala, Mumbai</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-phone-call"></i>
                <div>
                    <h4>phone number</h4>
                    <p>9867235486</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-map-pin"></i>
                <div>
                    <h4>Email</h4>
                    <p>swarajrballal@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>


