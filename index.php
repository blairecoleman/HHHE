<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Haitian Hope Humanitarian Effort</title>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<div class = "headingHome">
    <div class = "overlay">
    <div class = "topnav">
        <header>
    <img class = "logo" src ="assets/logo.png" alt = "haitian hope logo">
    <h1>Haitian Hope Humanitarian Efforts Inc.</h1>
    </header>
<nav>
    <ul>
        <li><a href = "impact.html">Our Impact</a></li>
        <li><a href = "trips.html">Our Trips</a></li>
        <li><a href = "blog.php">Our Stories</a></li>
        <li><a href = "donate.php">Donate</a></li>
    </ul>
</nav></div>
    <div class = "headerCont">
        <blockquote class = "statement">
            Restoring Haitian Hope and Dignity
        </blockquote>
        <em class = "subStatement">Empowering Haitian Citizens through
            Education, Healthcare and Nutrition</em>
        <button class = "callToAction">Get Involved</button>
    </div>
    </div>
</div>
<div class = "video">
    <iframe width="100%" height="850" src="https://www.youtube.com/embed/mpf61HPuFo4?rel=0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
</div>
<div id = "artBackground">
    <div class = "overlay">
    <h2>About Us</h2>
    <p class = "pFeat">HHHE is a non-for-profit organization established with the goal
        of positively impacting the lives of those in Haiti by restoring hope
        and dignity and sharing the love of Christ with them. We provide resources for
        education, health care and businesses. HHHE does regular mission trips every
        other year, and does remote work.
    </p>
    <blockquote class = "quoteFeature">
        “We want to alleviate the suffering of Haitian people and share the love of Christ
        with them by providing resources for education, healthcare, and nutrition.
        We carry out this mission through community services, evangelistic efforts,
        and mission trips. Haitian Hope Humanitarian’s Board of Directors, along with
        volunteers and advocates will work to restore hope and dignity to the people of Haiti.”
    </blockquote>
    </div>
</div>
<div class = "subscriptionFeature">
    <div class = "overlay">
    <blockquote class = "statement">
        Stay Up-to-Date
    </blockquote>
    <em class = "subStatement">Subscribe to our Newsletter and Blog</em>
    <div>
    <?php
    require_once 'serverconn.php';

    $email = filter_input(INPUT_POST, "email");
    $name = filter_input(INPUT_POST, "name");
    $validEmail = "@";


    if (strpos($email, $validEmail)){
        print "<blockquote class = 'regQuote'> Thank you for your Subscription $name!</blockquote>";
        $sql = "INSERT INTO emailSubscriptions (id, name, email) VALUES(1,$name,$email);";

    } else {
        print <<<HERE
    <!--Subscription Form-->
    <form action = "index.php" method = "post">
        <div class = "formgroup">
        <label for = subname>Name: </label>
        <input id = "subname" type = "text" name = "name" placeholder="Your Name">
        </div>
        <div class = "formgroup">
        <label for = "subemail">Enter Your Email Below</label>
        <input type = "email" id = "subemail" name ="email" placeholder = "youremail@email.com">
        </div>
        <p class = "note">We respect your privacy and will not misuse your information.</p>
        <button type = "submit" class = "callToAction">Subscribe</button>
    </form>
HERE;
    }
    ?>
    </div>
    </div>
</div>
<div class ="secondaryNav">
    <div class = "secondaryNavItem">
        <a href = "impact.html">
        <img src = "assets/cropIMG_32.jpg" alt = "" class = "secondaryNavImg">
        <h3>Our Impact</h3>
        </a>
    </div>
    <div class = "secondaryNavItem">
        <a href = "trips.html">
        <img src = "assets/copyHouseonHill.jpeg" alt = "" class = "secondaryNavImg">
        <h3>Our Trips</h3>
        </a>
    </div>
    <div class = "secondaryNavItem">
        <a href = "blog.php">
        <img src = "assets/IMG_20.jpg" alt = "" class = "secondaryNavImg">
        <h3>Our Blog</h3>
        </a>
    </div>
</div>
<div class = "currentProjects">
    <div class = "featurePostcard" id = "microFinance">
        <p class = "postcardLabel">Micro-Finance Program</p>
        <button class = "callToAction">Find out More</button>
    </div>
    <div class = "featurePostcard" id = "education">
        <p class = "postcardLabel">Support a Child's Education</p>
        <button class = "callToAction">Find out More</button>
    </div>
    <div class = "featurePostcard" id = "orphanage">
        <p class = "postcardLabel">Building and Orphanage</p>
        <button class = "callToAction">Find out More</button>
    </div>
    <div class = "featurePostcard" id = "youthPavilion">
        <p class = "postcardLabel">Building a Youth Pavilion</p>
        <button class = "callToAction">Find out More</button>
    </div>
    <div class = "featurePostcard" id = "mobileClinic">
        <p class = "postcardLabel">Establish and Maintain a Mobile Clinic</p>
        <button class = "callToAction">Find out More</button>
    </div>
</div>
<footer>
    <div class ="socialFooter">
        <button></button>
        <button class = "callToAction">Donate</button>
        <button></button>
    </div>
    <div class ="sponsors">
        <h4>Thank you to Our Sponsors</h4>
        <div id="sponsors">
            <h5>Business Sponsors</h5>
            <ul id = bsponsors>
                <li>Prayer Warriors</li>
                <li>Hope for Health</li>
                <li>Restoring Vision</li>
                <li>Dr. Sherrer Dentistry</li>
                <li>Dr. Randy Griffin Dental</li>
                <li>Dr. Gomes DDS MSD Periodontics and Dental Implants</li>
                <li>Suzy's Consignment and Resale</li>
                <li>F.A.M.E Medical Supplies</li>
                <li>Seeds of Life</li>
                <li>Westside Ministries</li>
                <li>Maranatha French Church Indianapolis</li>
            </ul>
            <h5> Individual Sponsors</h5>
            <ul id = isponsors>
                <li>Joseph Jackson</li>
                <li>Joe Robinson</li>
                <li>Muriel Wilson</li>
                <li>Bonnie Love</li>
                <li>Terrence and Troyanna Jefferson</li>
                <li>Bonnie Wolf</li>
                <li>Gloria Heck</li>
                <li>Ray Smith</li>
                <li>Pastor Trofort</li>
                <li>Jackie Abdool</li>
                <li>Cassandra Ductan</li>
                <li>Lucson Thomas</li>
                <li>Cindy Johns</li>
                <li> Dee Rowley</li>
                <li>Stephanie Minnett</li>
                <li>Carol Desuza</li>
                <li>Ro Holcomb</li>
                <li>Janet Heart</li>
                <li>Rose Taffe</li>
                <li>Tyra Dennis</li>
                <li>William and Rebecca Huskey</li>
                <li>John and Windy Skeete</li>
                <li>Adrian Paquin</li>
                <li>Nerlyne Desir</li>
                <li>Costale Remarias</li>
                <li>Amanda Burris</li>
                <li> Lori Hutchison</li>
                <li>Carol Krag</li>
                <li>Marie Thomas</li>
            </ul>
        </div>
    </div>
    <p class = "note">Proudly Designed and Developed by <span class = "tabeiBrand">Tabei</span> Design 2020</p>
    <small>&copy 2020 Haitian Hope Humanitarian Efforts Inc.</small>
</footer>
</body>
</html>
