<?php
ob_start();
include 'includes/autoloader.php';

$validation = new Validation();
$validation->validate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Please Subscribe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/indexMobile.css">
</head>
<body>
    <div class="main">
        <header>
            <nav>
                <ul class="menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="page">
            <div class="content" id="content">
                <p id="subscribe-txt-1">Subscribe to newsletter</p>
                <p id="subscribe-txt-2">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
                <form action="index.php" method="post" id="form" target="frame">
                    <div id="inputHolder">
                        <input type="text" id="inputEmail" name="inputEmail" placeholder="Type your email address here...">
                        <button id="submit" type="submit" name="submit"></button>
                    </div>
                    <label class="checkbox" for="checkboxId">
                        <input class="checkboxInput" type="checkbox" name="checkboxName" id="checkboxId">
                        <div class="checkboxBox">
                        </div>
                        <span class="terms-of-service">I agree to <a href="#">terms of service</a></span>
                    </label>
                </form>
                <div id="error">
                    <noscript><?php $validation->showErrorMessage(); ?></noscript>
                </div>
                <hr size="1" width="85%" color="#E3E3E4">
                <div class="icons">
                    <div class="facebook"></div>
                    <div class="instagram"></div>
                    <div class="twitter"></div>
                    <div class="youtube"></div>
                </div>
            </div>
            <div class="content" id="contentSuccess">
                <img id="successIcon" src="images/icons/ic_success.svg">
                <p id="subscribe-success-1">Thanks for subscribing!</p>
                <p id="subscribe-success-2">You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                <hr size="1" color="#E3E3E4">
                <div class="icons">
                    <div class="facebook"></div>
                    <div class="instagram"></div>
                    <div class="twitter"></div>
                    <div class="youtube"></div>
                </div>
            </div>
        </div>
    </div>
    <iframe name="frame"></iframe>
    <script src="scripts/validation.js"></script>
</body>
</html>
