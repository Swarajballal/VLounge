<?php
    include 'components/connection.php';
    $db_name = 'mysql:host=sql313.epizy.com;dbname=epiz_34063527_shop_db';
    $db_user = 'epiz_34063527';
    $db_password = 'VVPepfcuBA1';
    $conn = new PDO($db_name, $db_user, $db_password);
    session_start();

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

//// register user
if(isset($_POST['submit'])) {
    $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $message[] = 'email already exists';
        echo 'email already exists';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm your password';
            echo 'confirm your password';
        }else{
            $insert_user = $conn->prepare("INSERT INTO `users` (id, name, email, password) VALUES (?, ?, ?, ?)");
            $insert_user->execute([$id, $name, $email, $pass]);
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
            $select_user->execute([$email, $pass]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            if ($select_user->rowCount() > 0) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                header("Location: index.php");
                exit();
            }
        }
    }
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V-Lounge - register now</title>
</head>
<body>
<div class="main-container">
    <section class="form-container">
        <div class="title">
            <img src="img/logo4.png" alt="logo" class="reglog">
            <h1>register now</h1>
            <p>"Fuel your campus experience with V-lounge - where great food meets great company!"</p>
        </div>
        <form action="" method="post">
            <div class="input-field">
                <p>your name <sup>*</sup></p>
                <input type="text" name="name" required placeholder="enter your name" maxlength="50">
            </div>
            <div class="input-field">
                <p>your email <sup>*</sup></p>
                <input type="email" name="email" required placeholder="enter your email" maxlength="50"
                       oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>your password <sup>*</sup></p>
                <input type="password" name="pass" required placeholder="enter your password" maxlength="50"
                       oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>confirm password <sup>*</sup></p>
                <input type="password" name="cpass" required placeholder="enter your password" maxlength="50"
                       oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>
    </section>
</div>
<script src="index.js"></script>
<?php include 'components/alert.php'; ?>
</body>
</html>