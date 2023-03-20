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

<div class="navigation">
            <button class="hamburger" onclick="show()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </button>
        <nav>
            <ul>
                <li><a href="matte.php" id="ham">Matte</a></li>
                <li><a href="fysik.php" id="ham">Fysik</a></li>
                <li><a href="robotik.php" id="ham">Robotik</a></li>
                <li><a href="teknik.php" id="ham">Teknik</a></li>
                <li><a href="prog.php" id="ham">Programmering</a></li>
            </ul>
        </nav>
        </div>
    <section>
        <article>           
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="https://img.koket.se/standard-mega/kebab-i-pitabrod-med-tva-saser-inlagd-chili-och-krispig-sallad.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://receptfavoriter.se/sites/default/files/styles/recipe_4x3/public/hemgjort_kebabkott_pa_fat_1060.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://www.bellybalance.se/wp-content/uploads/2017/05/Vegetarisk-Shish-kebab-med-quinoasallad.jpg" style="width:100%">
            </div>
        </div>
            <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        </article>
    </section>


<?php
require("footer.php");
?>