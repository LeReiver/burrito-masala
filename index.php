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
            <a href="#top"><h1><span id="burrito">Burrito</span><span id="masala">Masala</span></h1></a>
        </nav>
        <h2>A Fresh &amp; Exotic Take on <br> Portland Street Food</h2>
    </header>
    <main>
        <section id="ordering" class="section group">
            <h1>How To Order</h1>
            <div  class="col span_6_of_12">
                <h3><span id="steps">1.</span> Choose either Burrito or Bowl <span id="price">$8</span></h3>
                <h3><span id="steps">2.</span> Choose choice of Meat or Veggie</h3>
            </div>
            <div  class="col span_6_of_12" id="steps" style="margin-top: -4px;">
                <h3><span id="steps">3.</span> Choose type of Rice</h3>
                <h3><span id="steps">4.</span> Choose your Toppings</h3>
            </div>
            <div class="section group">
                <div  class="col span_6_of_12">
                    <h2>Meats</h2>
                    <ul>
                        <li>Chicken Tikka Masala</li>
                        <li>Lamb Curry</li>
                        <li>Pork in Salsa Verde</li>
                    </ul>
                </div>
            <div  class="col span_6_of_12">
                <h2>Veggies</h2>
                <ul>
                    <li>Sambar<br>&nbsp;&nbsp;(lentil curry, vegan)</li>
                    <li>Aloo Gobi Masala<br>&nbsp;&nbsp;(potato and cauliflower, vegan)</li>
                    <li>Chile Relleno<br>&nbsp;&nbsp;(vegetarian, contains cheese)</li>
                </ul>
            </div>
            <div  class="col span_6_of_12">
                <h2>Rice (all vegan)</h2>
                <ul>
                    <li>Kerala Biryani</li>
                    <li>Spanish Rice</li>
                    <li>White or <br>&nbsp;&nbsp;Brown Rice (khaima)</li>
                </ul>
            </div>
            <div  class="col span_6_of_12">
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
        <!--Gallery section -->
        <section id="gallery">
            <div class="section group">
                <div id="column" class="col span_6_of_12"><img src="includes/images/vegBurrito.jpg" alt="Sambar Burrito"></div>
                <div id="column" class="col span_6_of_12"><img src="includes/images/riceBowl.jpg" alt="Lamb Curry Bowl"></div>
            </div>
        </section>
        <!--Location section-->
        <section id="location" class="section group">
            <h1>Find Us Here</h1>
            <div class="col span_6_of_12">
                <map>
                    <a href="https://www.google.com/maps/place/313+SW+Alder+St,+Portland,+OR+97204/@45.5190208,-122.675541,17z/data=!3m1!4b1!4m5!3m4!1s0x54950a05c1ee2db9:0xce7ecf88b6d8e74b!8m2!3d45.5190208!4d-122.675541" target="_blank" >
                        <img src="includes/images/map.png" alt="map: 313 SW Alder St"></a>
                </map>
                <p >313 SW Alder, Portland, OR</p>
            </div>
            <div class="col span_6_of_12">
                <img src="includes/images/5thStCarts.jpg" alt="3rd Street Carts">
                <p>We are open 7 days a week<br>11am-7pm</p>
            </div>
        </section>
    </main>
    <!-- Footer section-->
    <footer  class="section group" >
        <section id="bois">
                <h3>Our Story</h3>
            <div  class="col span_6_of_12">
                <h4>Prasad</h4>
                <p>Champollion cosmos preserve and cherish that pale blue dot tesseract, another world?
                    Great turbulent clouds the ash of stellar alchemy cosmic ocean? Finite but unbounded
                    ship of the imagination gathered by gravity and billions upon billions upon billions
                    upon billions upon billions.
                </p>
            </div>
            <div  class="col span_6_of_12">
                <h4>Ramona</h4>
                <p>Hypatia realm of the galaxies a very small stage in a vast
                    cosmic arena! Birth! Cosmos a mote of dust suspended in a sunbeam, cosmos. Light
                    years rich in heavy atoms, paroxysm of global death rich in mystery courage of our
                    questions decipherment.
                </p>
            </div>
        </section>
        <div  class="section group">
            <section id="phone" class="col span_6_of_12">
                <div id="text">
                    <h3>Text In Your Order</h3>
                    <a href="sms:503-555-5555"><img src="includes/images/text_wht.png"alt="text us link"></a>
                </div>
                <div id="talk">
                    <h3>Call In Your Order</h3>
                    <a href="tel:503-555-5555"><img src="includes/images/talk_wht.png"alt="call us link"></a>
                </div>
            </section>
            <section id="phone_desktop" class="col span_6_of_12">
                <div>
                    <h3>Call Us</h3>
                    <p>503-555-5555</p>
                </div>
            </section>
            <section id="social" class="col span_6_of_12">
                <div>
                    <h3>Be Social</h3>
                </div>
                    <a href="https://twitter.com/?lang=en" target="_blank"><img src="includes/images/twitter_wht.png" alt="twitter link"></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="includes/images/facebook_wht.png"alt="facebook link"></a>
                    <a href="https://yelp.com/?lang=en" target="_blank"><img src="includes/images/yelp_wht.png" alt="yelp link"></a>
                    <a href="https://www.pinterest.com/" target="_blank"><img src="includes/images/pinterest_wht.png" alt="pinterest link"></a>
            </section>
        </div>
        <section id="copyright">
            <p>&copy; 2016 Burrito Masala <br>Designed by Le-Reiver</p>
        </section>
    </footer>
<?php require('includes/smooth_scroll.php');?>
</body>
</html>