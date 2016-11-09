<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/1/16
 * Time: 11:43 AM
 *
 * A website for a fictitious fusion food cart in Portland, OR
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Includes head files file-->
    <?php require_once('includes/head_files.php'); ?>
    <title>Burrito Masala</title>
</head>

<body>
    <!--Section holds id for top anchor. Non breaking space used to compensate for navigation height. -->
    <section id="top">&nbsp;</section>
    <!--Header section-->
    <header>
        <nav>
            <a href="#top"><h1>Burrito Masala</h1></a>
        </nav>
        <h2>A fresh &amp; exotic take on <br> Portland Street Food</h2>
    </header>
    
    <main>
        <!--Location section-->
        <section id="location" class="section group">
            <h1>Find Us Here</h1>
            <map>
                <a href="https://www.google.com/maps/place/313+SW+Alder+St,+Portland,+OR+97204/@45.5190208,-122.675541,17z/data=!3m1!4b1!4m5!3m4!1s0x54950a05c1ee2db9:0xce7ecf88b6d8e74b!8m2!3d45.5190208!4d-122.675541" target="_blank" >
                    <img  class="col_map span_6_of_12"  src="includes/images/map.png"></a>
            </map>
            <p >313 SW Alder, Portland, OR<br>We are open 7 days a week<br>11am-7pm</p>
        </section>
        <!--Gallery section-->
        <section id="gallery">
            <h1>Our Food</h1>
            <ul class="section group">
                <li class="col span_6_of_12"><img src="includes/images/meatBurrito.jpg" alt="Pork Burrito">Pork Verde Burrito</li>
                <li class="col span_6_of_12"><img src="includes/images/vegBurrito.jpg" alt="Sambar Burrito">Sambar Burrito</li>
                <li class="col span_6_of_12"><img src="includes/images/riceBowl.jpg" alt="Lamb Curry Bowl">Lamb Curry Bowl</li>
                <li class="col span_6_of_12"><img src="includes/images/vegBowl.jpg" alt="Chile Relleno Bowl">Chile Relleno Bowl</li>
                <li class="col span_6_of_12"><img src="includes/images/indianBowl.jpg" alt="Aloo Gobi Masala Bowl">Aloo Gobi Masala Bowl</li>
                <li class="col span_6_of_12"><img src="includes/images/fifthStreet.jpg" alt="3rd Street Carts">3rd Street Carts</li>
            </ul>
        </section>
        <!--Ordering section-->
        <section id="ordering">
            <h1>How To Order</h1>
            <h3>1. Choose either Burrito or Bowl <span id="price">$8</span></h3>
            <h3>2. Choose either Meat or Veggie</h3>
            <h3>3. Choose type of Rice</h3>
            <h3>4. Choose your Toppings</h3>
            <h2>Meat</h2>
            <ul>
                <li>Chicken Tikka Masala</li>
                <li>Lamb Curry</li>
                <li>Pork in Salsa Verde</li>
            </ul>
            <h2>Veggie</h2>
            <ul>
                <li>Sambar (lentil curry, vegan)</li>
                <li>Aloo Gobi Masala <br>&nbsp;&nbsp;(potato and cauliflower, vegan)</li>
                <li>Chile Relleno <br>&nbsp;&nbsp;(vegetarian, contains cheese)</li>
            </ul>
            <h2>Rice (all vegan)</h2>
            <ul>
                <li>Kerala Biryani</li>
                <li>Spanish Rice</li>
                <li>White or Brown Rice (khaima)</li>
            </ul>
            <h2>Toppings</h2>
            <ul class="left">
                <li>Mango Chutney</li>
                <li>Tomatillo Salsa</li>
                <li>Raita</li>
                <li>Sour cream</li>
                <li>Guacamole</li>
                <li>&nbsp;&nbsp;(<span id="price">$.75</span> extra!)</li>
            </ul>
            <ul class="right">
                <li>Cheese</li>
                <li>Sour cream</li>
                <li>Onions</li>
                <li>Tomatoes</li>
                <li>Cucumbers</li>
                <li>Cilantro</li>
            </ul>
            <ul class="bottom">
                <li>Grandma Nena’s Fiery Red Salsa </li>
            </ul>
        </section>
    </main>
    <!-- Footer section-->
    <footer  class="section group">
        <section id="bois">
            <div  class="col span_6_of_12">
            <h3>Our Story</h3>
            <div  class="col span_12_of_12">
            <h4>Prasad</h4>
                <p>
                    Champollion cosmos preserve and cherish that pale blue dot tesseract, another world?
                    Great turbulent clouds the ash of stellar alchemy cosmic ocean? Finite but unbounded
                    ship of the imagination gathered by gravity and billions upon billions upon billions
                    upon billions upon billions.
                </p>
            </div>
            <div  class="col span_12_of_12">
            <h4>Ramona</h4>
                <p>
                    Hypatia realm of the galaxies a very small stage in a vast
                    cosmic arena! Birth! Cosmos a mote of dust suspended in a sunbeam, cosmos. Light
                    years rich in heavy atoms, paroxysm of global death rich in mystery courage of our
                    questions decipherment, the only home we've ever known shores of the cosmic ocean!
                </p>
            </div>
        </section>
        <section id="social">
            <div  class="col span_3_of_12">
                <h3>Follow Us</h3>
                <a href="https://twitter.com/?lang=en" target="_blank"><img src="includes/images/twitter_wht.png"></a>
            </div>
            <div  class="col span_3_of_12">
                <h3>Like Us</h3>
                <a href="https://www.facebook.com/" target="_blank"><img src="includes/images/facebook_wht.png"></a>
            </div>
            <div  class="col span_3_of_12">
                <h3>Yelp Us</h3>
                <a href="https://yelp.com/?lang=en" target="_blank"><img src="includes/images/yelp_wht.png"></a>
            </div>
            <div  class="col span_3_of_12">
                <h3>Pin Us</h3>
                <a href="https://www.pinterest.com/" target="_blank"><img src="includes/images/pinterest_wht.png"></a>
            </div>
        </section>
        <section id="phone"  class="section group">
            <div  class="col span_6_of_12">
                <h3>Text In Your Order</h3>
                <a href="sms:503-555-5555"><img src="includes/images/text_wht.png"></a>
            </div>
            <div  class="col span_6_of_12">
                <h3>Call In Your Order</h3>
                <a href="tel:503-555-5555"><img src="includes/images/talk_wht.png"></a>
            </div>
        </section>
        <section id="phone_desktop">
            <div>
                <h3>Call Us</h3>
                <p>503-555-5555</p>
            </div>
        </section>
        <section id="copyright">
            <p>&copy; 2016 Burrito Masala</p>
        </section>
    </footer>
<?php require('includes/smooth_scroll.php');?>
</body>
</html>