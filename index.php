<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/1/16
 * Time: 11:43 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Burrito Masala</title>
    <link href="https://fonts.googleapis.com/css?family=Abel|Archivo+Scada:400,700" rel="stylesheet">
    <link rel="stylesheet" href="includes/styles/reset.css.php">
    <link rel="stylesheet" href="includes/styles/helper.css.php">
    <link rel="stylesheet" href="includes/styles/style.css">
    <script src="includes/scripts/jquery-1.11.0.min.js"></script>

</head>

<body>
    <header>
        <nav>
<!--            <a href="#" id="logo">logo</a>-->
            <a href="#"><h1>Burrito Masala</h1></a>
        </nav>
        <h2>A fresh &amp; exotic take on <br> Portland Street Food</h2>
    </header>
    
    <main>
        <section id="location">
            <h1>Find Us Here</h1>
            <map>
                <img align="center" src="includes/images/map.png">
            </map>
            <p>313 SW Alder, Portland, OR<br>We are open 7 days a week<br>11am-7pm</p>
        </section>
        <section id="gallery">
            <h1>Our Food</h1>
            <ul>
                <li><img src="includes/images/meatBurrito.jpg">Meat Burrito</li>
                <li><img src="includes/images/vegBurrito.jpg">Veggie Burrito</li>
                <br>
                <li><img src="includes/images/riceBowl.jpg">Rice Bowl</li>
                <li><img src="includes/images/vegBowl.jpg">Veggie Bowl</li>
                <br>
                <li><img src="includes/images/indianBowl.jpg">Indian Bowl</li>
                <li><img src="includes/images/fifthStreet.jpg">3rd Street Carts</li>
            </ul>
        </section>
        <section id="ordering">
            <h1>How To Order</h1>
            <h3>1. Choose either Burrito or Bowl</h3>
            <h3>2. Choose either Meat or Veggie</h3>
            <h3>3. Choose type of Rice</h3>
            <h3>4. Choose your Toppings</h3>
            <h2>Meat</h2>
            <h2>Veggie</h2>
            <h2>Rice</h2>
            <h2>Toppings</h2>
        </section>
    </main>
    
    <footer>
    </footer>

<script>
    $('a[href^="#"]').on('click', function(event) {

        var target = $(this.getAttribute('href'));

        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }

    });
</script>
</body>
</html>