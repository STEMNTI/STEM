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
                <li><a href="" id="ham">Matte</a></li>
                <li><a href="" id="ham">Fysik</a></li>
                <li><a href="" id="ham">Robotik</a></li>
                <li><a href="" id="ham">Teknik</a></li>
                <li><a href="" id="ham">Programmering</a></li>
            </ul>
        </nav>
        </div>
    <section>
        <article>           
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="https://cdn.pixabay.com/photo/2016/10/11/21/43/geometric-1732847__480.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://cdn.pixabay.com/photo/2014/09/20/13/52/board-453758__480.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://cdn.pixabay.com/photo/2018/09/27/09/22/artificial-intelligence-3706562__480.jpg" style="width:100%">
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