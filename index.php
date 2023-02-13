<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StemKlubben</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="hamburger.css">
</head>
<body>
<header>
        <img src="Bilder/SnyggLogga.png" alt="Snygglogga" id="logga">
        <h2>STEM-NTI</h>
</header>
<div class="navigation">
            <button class="hamburger" onclick="show()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </button>
        <nav>
            <ul>
                <li><a href="" id="ham">random link 1</a></li>
                <li><a href="" id="ham">random link 2</a></li>
                <li><a href="" id="ham">random link 3</a></li>
            </ul>
        </nav>
        </div>
    <section>
        
        <article>
            <h1>article</h1>
            <p>random stuff</p>
        </article>
    </section>
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
                    <td>Matte</td>
                    <td><a id="links" href="https://www.ntigymnasiet.se/kristianstad/">NTI Hemsida</a></td>
                    <td>Vi är en skola för dig som vill vara en del av IT-utvecklingen!</td>
                </tr>
                <tr>
                    <td>Fysik</td>
                    <td>Om oss</td>
                    <td>Om du vill gå en populär gymnasieutbildning inom tech och IT</td>
                </tr>
                <tr>
                    <td>Robotik</td>
                    <td><a id="links" href="https://www.ntigymnasiet.se/program/informations-och-medieteknik/kristianstad/">Teknik Programmet</a></td>
                    <td>är NTI Gymnasiet Kristianstad det självklara valet.</td>
                </tr>
                <tr>
                    <td>Teknik</td>
                    <td><a id="links" href="https://www.ntigymnasiet.se/program/dator-och-kommunikationsteknik/kristianstad/" >El & Energi Programmet</a></td>
                </tr>
                <tr>
                    <td>Programmering</td>
                </tr>
            </tbody>
        </table>
        <div id="icons">
        <a href="https://www.facebook.com/ntikristianstad/"><img src="Bilder/Facebook Stem.png" alt="Facebook Icon" id="Facebook"></a>
        <a href="https://www.ntigymnasiet.se/kristianstad/"><img src="Bilder/Hemsida Stem.png" alt="Hemsida Icon" id="Hemsida"></a>
        <a href="https://www.instagram.com/ntikristianstad/"><img src="Bilder/instagram stem.jpg" alt="Instagram Icon" id="Instagram"></a>
        </div>  
        <p id="copyright">Stem Klubben © 2022</p>
    </footer>
    <script src="hamburger.js"></script>
</body>
</html>