<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="hamburger.css">
</head>
<body style=" font-family: Verdana, sans-serif; overflow: hidden;">
    <header>
        <img src="Bilder/logo.png" alt="Snygglogga" id="logga">
        <h1 id="rubrik">STEM-NTI</h>
    </header>
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
        <footer>
        <table>
            <thead>
                <tr>
                    <th id="th1">Projekt</th>
                    <br>
                    <th id="th2">Sidor</th> 
                    <th id="th3">NTI Gymnasiet</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a id="links" href="matte.php">Matte</a></td>
                    <td><a id="links" href="https://www.ntigymnasiet.se/kristianstad/">NTI Hemsida</a></td>
                    <td>Vi är en skola för dig som vill vara en del av IT-utvecklingen!</td>
                </tr>
                <tr>
                    <td><a id="links" href="fysik.php">Fysik</a></td>
                    <td><a id="links" href="Omoss.php">Om oss</a></td>
                    <td>Om du vill gå en populär gymnasieutbildning inom tech och IT</td>
                </tr>
                <tr>
                    <td><a id="links" href="robotik.php">Robotik</a></td>
                    <td><a id="links" href="https://www.ntigymnasiet.se/program/informations-och-medieteknik/kristianstad/">Teknik Programmet</a></td>
                    <td>är NTI Gymnasiet Kristianstad det självklara valet.</td>
                </tr>
                <tr>
                    <td><a id="links" href="teknik.php">Teknik</a></td>
                    <td><a id="links" href="https://www.ntigymnasiet.se/program/dator-och-kommunikationsteknik/kristianstad/" >El & Energi Programmet</a></td>
                </tr>
                <tr>
                    <td><a id="links" href="prog.php">Programmering</a></td>
                </tr>
            </tbody>
        </table>
        <div id="icons">
        <a href="https://www.facebook.com/ntikristianstad/"><img src="Bilder/Facebook Stem.jpg" alt="Facebook Icon" id="Facebook"></a>
        <a href="https://www.ntigymnasiet.se/kristianstad/"><img src="Bilder/Hemsida Stem.jpg" alt="Hemsida Icon" id="Hemsida"></a>
        <a href="https://www.instagram.com/ntikristianstad/"><img src="Bilder/instagram stem.jpg" alt="Instagram Icon" id="Instagram"></a>
        </div>  
        <p id="copyright">Stem Klubben © 2022</p>
    </footer>
    <script src="hamburger.js"></script>
    <script src="slideshow.js"></script>
</body>
</html>