<?php 
session_name("STEM");
session_start();
// prevent non admin users from visiting this page
/* if(!isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin"){
  header("Location: ooopspage.html");
  exit();
} */
require("header.php");
?>

    <section>
        <article>           
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="https://img.koket.se/standard-mega/kebab-i-pitabrod-med-tva-saser-inlagd-chili-och-krispig-sallad.jpg" style="width:100%;">
            </div>
            <div class="mySlides fade">
                <img src="https://receptfavoriter.se/sites/default/files/styles/recipe_4x3/public/hemgjort_kebabkott_pa_fat_1060.jpg" style="width:100%;">
            </div>
            <div class="mySlides fade">
                <img src="https://www.bellybalance.se/wp-content/uploads/2017/05/Vegetarisk-Shish-kebab-med-quinoasallad.jpg" style="width:100%;">
            </div>
        </div>
            <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        </article>x
    </section>


<?php
require("footer.php");
?>