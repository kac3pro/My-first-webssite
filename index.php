<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best online clothes store! | Clothesmania</title>
    <link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>
<div class="overlay" id="overlay">
    <div class="newsletter-popup" id="popup">
        <h2>Subscribe to out newsletter!</h2>
        <form action="" method="post" onsubmit="return false">
            <div class="email-container">
                <label for="email">Email:</label>
                <input id="email" type="email" name="email">
            </div>
            <input id="newsletter-submit" type="submit">
        </form>
    </div>
</div>
<?php include "partial/header.html" ?>
<main>
    <div class="banner_image">
        <h1 class="banner">Featured</h1>
        <div id="featured" class="flex-container">

            <a href="" class="item-card">
                <img src="./images/jeans.jpg">
                <h2>jeans title</h2>
                <p>jeans description lorem ipsum dolor sit amet</p>
            </a>
            <a href="" class="item-card">
                <img src="./images/jeans.jpg">
                <h2>jeans title</h2>
                <p>jeans description lorem ipsum dolor sit amet</p>
            </a>
            <a href="" class="item-card">
                <img src="./images/jeans.jpg">
                <h2>jeans title</h2>
                <p>jeans description lorem ipsum dolor sit amet</p>
            </a>
            <a href="" class="item-card">
                <img src="./images/jeans.jpg">
                <h2>jeans title</h2>
                <p>jeans description lorem ipsum dolor sit amet</p>
            </a>
        </div>
    </div>
</main>
<?php include "partial/footer.html"?>
<script src="lib/newsletter.js"></script>
</body>
</html>