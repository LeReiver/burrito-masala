<?php ?>
<!DOCTYPE html>
<!--
* Programmer: Michael Le-Reiver
* Date: 11/1/16
* Time: 11:43 AM
* File: index.php
* Description: A website for a fictitious fusion food cart in Portland, OR. Designed and developed using PHP and LESS.

*  NOTES FOR FUTURE MODIFICATIONS

 * Images:
 *      - All images are place holders and need to be updated.
 *      - Hero(main) image optimum size is 1200px width and 700px height
 *      - Food images optimum size is 1024px width and 680px height
 *      - Location images optimum size is 700px width and 500px height
 *
 * Responsive Grid System:
 *      - This website uses Responsive Grid System for responsive columns for varying device size: http://www.responsivegridsystem.com/
 *
 * Updating Menu Items:
 *      - Menu items can be updated in the Ordering section. The reside in list tags. Type new menu items in between the <li> and </li> tags.
 *
 * Color Palette:
 *      Link to color palette https://color.adobe.com/cloud/aHR0cHM6Ly9jYy1hcGktYXNzZXRzLmFkb2JlLmlv/library/166e5450-0e50-11e5-a420-5fad9b827e82/theme/9a6561c3-3137-482b-9f59-99505d6df4f0/
 *      - Red (#CF0021) is used for Ordering section headers and bordering sections.
 *      - Light blue (#8AC2F1)  is used for bordering sections.
 *      - Dark green (#036128) is used for the logo and footer
 *      - Bright green (#4DAF18) is used for bordering sections.
 *      - Orange (#EE6111) is used for the logo.
 * SEO Assets:
 *      - Description: Burrito Masala is a fictitious food cart located in downtown
 *          Portland, OR that specializes in delicious southern Indian (Kerala) and Mexican foods... stuffed
 *          in a flour tortilla! Diners can also opt to go gluten free with our bowl options. We’re run by a
 *          husband and wife team (James Beard award­winning chefs Prasad Varma and Ramona Varma­Hernandez)
 *      - Keywords: Burrito Masala, burrito masala, burrito, masala, tikka, pork, verde,
 *          sambar, aloo gobi, chili relleno, chutney, curry, kerala, biryani, rice bowl, vegan, modern, spicy,
 *          exotic, fusion, food cart, Southern Indian, Mexican, Portland, Oregon, downtown
-->
<html lang="en">
<head>
<title>Burrito Masala</title>
<!-- Metadata Tags -->
<meta name="description" content="Burrito Masala is a fictitious food cart located in downtown
    Portland, OR that specializes in delicious southern Indian (Kerala) and Mexican foods... stuffed
    in a flour tortilla! Diners can also opt to go gluten free with our bowl options. We’re run by a
    husband and wife team (James Beard award­winning chefs Prasad Varma and Ramona Varma­Hernandez)"> <!-- Description for search engines-->
<meta name="keyword" content="Burrito Masala, burrito masala, burrito, masala, tikka, pork, verde,
    sambar, aloo gobi, chili relleno, chutney, curry, kerala, biryani, rice bowl, vegan, modern, spicy,
    exotic, fusion, food cart, Southern Indian, Mexican, Portland, Oregon, downtown "> <!--Keywords for SEO -->
<!--Includes head files file-->
<?php require_once('includes/utility/head_files.php'); ?>
</head>

<body>
    <!--Section holds id for top anchor. Non breaking space used to compensate for navigation height. -->
    <section id="top">&nbsp;</section>
    <!--Header section-->
    <header>
        <nav>
            <a href="#top"><h1><span id="burrito">Burrito</span><span id="masala">Masala</span></h1></a>
        </nav>
        <!-- Paraphrase - Elevator Statement-->
        <h2>A Fresh &amp; Exotic Take on <br> Portland Street Food</h2>
    </header>
    <main>
        <!-- Ordering Section -->
        <section id="ordering" class="section group">
            <!-- How to Order steps are separated to form two columns on larger devices -->
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
                <!-- Meats and Veggies are separated to form two columns on larger devices -->
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
                <!-- Rice and Toppings are separated to form two columns on larger devices -->
            <div  class="col span_6_of_12">
                <h2>Rice (all vegan)</h2>
                <ul>
                    <li>Kerala Biryani</li>
                    <li>Spanish Rice</li>
                    <li>White or <br>&nbsp;&nbsp;Brown Rice (khaima)</li>
                </ul>
            </div>
            <div  class="col span_6_of_12">
                <!-- Toppings are separated to form two columns on larger devices -->
                <h2>Toppings</h2>
                <!-- Left column toppings -->
                <ul class="left">
                    <li>Mango Chutney</li>
                    <li>Tomatillo Salsa</li>
                    <li>Raita</li>
                    <li>Sour cream</li>
                    <li>Guacamole</li>
                    <li>&nbsp;&nbsp;(<span id="price">$.75</span> extra!)</li>
                </ul>
                <!-- Right column toppings -->
                <ul class="right">
                    <li>Cheese</li>
                    <li>Sour cream</li>
                    <li>Onions</li>
                    <li>Tomatoes</li>
                    <li>Cucumbers</li>
                    <li>Cilantro</li>
                </ul>
                <!-- Bottom column of toppings are separate because of length. Enables column adjustment on larger devices -->
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
                <!-- Map image link to  location on Google Maps-->
                <map>
                    <a href="https://www.google.com/maps/place/313+SW+Alder+St,+Portland,+OR+97204/@45.5190208,-122.675541,17z/data=!3m1!4b1!4m5!3m4!1s0x54950a05c1ee2db9:0xce7ecf88b6d8e74b!8m2!3d45.5190208!4d-122.675541" target="_blank" >
                        <img src="includes/images/map.png" alt="map: 313 SW Alder St"></a>
                </map>
                <!-- Address -->
                <p >313 SW Alder, Portland, OR</p>
            </div>
            <div class="col span_6_of_12">
                <img src="includes/images/5thStCarts.jpg" alt="3rd Street Carts">
                <!-- Hours of operation -->
                <p>We are open 7 days a week<br>11am-7pm</p>
            </div>
        </section>
    </main>
<!-- Requires footer file  -->
<?php require ('footer.php');?>
<!-- Requires smooth scrolling script for anchor tags   -->
<?php require('includes/scripts/smooth_scroll.php');?>
</body>
</html>