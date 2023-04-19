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
