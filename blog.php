<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <meta charset="UTF-8">
    <title>Our Stories</title>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <link rel="stylesheet" href="" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<div class = "headingRegular">
    <div class = "topnav">
        <header>
            <img class = "logo" src ="assets/logo.png" alt = "haitian hope logo">
            <a  href = "index.php"><h1>Haitian Hope Humanitarian Efforts Inc.</h1></a>
        </header>
        <nav>
            <ul>
                <li><a href = "impact.html">Our Impact</a></li>
                <li><a href = "trips.html">Our Trips</a></li>
                <li><a href = "blog.php">Our Stories</a></li>
                <li><a href = "donate.php">Donate</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class = "blogFeature">
    <h2></h2>
    <blockquote class = "statement">To see our work, check out our blog!</blockquote>
    <em class = "subStatement">Read the stories of Haitian Citizens and HHHE Volunteers.</em>
    <!--In Javascript/jQuery most recent post(feature post-->
    <p class= "pFeat"></p>
    <button class = "callToAction">Read More</button>
</div>
<h3></h3>
<div id = "highlightedStory">
    <!--(php)mark the new favorite as highlighted and use a loop to cycle through the array and unhighlight the previous-->
    <img src = "" alt = "">
    <h4>Post Title</h4>
    <p>Post Description</p>
    <button class="callToAction">Read More</button>
</div>
<div class = "gallerygridfeat">
    <!--for images, portfolio, art...square-->
    <div class="grid-container">
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
        <div class="grid-item">
            <img class = "blogImg" src = "" alt = "">
            <h3></h3>
            <p class = "blogP"></p>
        </div>
    </div>
</div>
<div class = "subscriptionFeature">
    <blockquote class = "statement">
        Stay Up-to-Date
    </blockquote>
    <em class = "subStatment">Subscribe to our Newsletter and Blog</em>
    <div>
        <?php

        $email = filter_input(INPUT_POST, "email");
        $name = filter_input(INPUT_POST, "name");
        $validEmail = "@";


        if (strpos($email, $validEmail)){
            print "<blockquote class = 'regQuote'> Thank you for your Subscription $name!</blockquote>";
            $sql = "INSERT INTO emailSubscriptions(name) value ('$name') INSERT INTO emailSubscriptions(email) value ('$email')";
        } else {
            print <<<HERE
    <!--Subscription Form-->
    <form action = "index.php" method = "post">
         <div class = "formgroup">
        <label for = subname>Name: </label>
        <input id = "subname" type = "text" name = "name">
        </div>
        <div class = "formgroup">
        <label for = "subemail">Enter Your Email Below</label>
        <input type = "email" id = "subemail" name ="email" placeholder = "youremail@email.com">
        </div>
        <button type = "submit" class = "callToAction">Subscribe</button>
    </form>
HERE;
        }

        ?>
    </div>
<footer>
    <div class ="socialFooter">
        <button></button>
        <button class = "callToAction"></button>
        <button></button>
    </div>
    <div class ="sponsors">
        <h4>Thank you to Our Sponsors</h4>
        <ul>
            <li></li>
        </ul>
    </div>
    <p class = "note">Proudly Designed and Developed by <span class = "tabeiBrand">Tabei</span> Design 2020</p>
    <small>&copy 2020 Haitian Hope Humanitarian Efforts Inc.</small>
</footer>
</body>
</html>
