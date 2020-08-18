<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <meta charset="UTF-8">
    <title>Our Trips</title>
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
<div class = "currentProjects">
    <div class = "featurePostcard" id = "microFinance">
        <h4>Micro-Finance Program</h4>
        <button class = "callToAction">Find out More</button>
    </div>
    <div class = "featurePostcard" id = "education">
        <h4>Fund an Education</h4>
        <button class = "callToAction">Find out More</button>

    </div>
    <div class = "featurePostcard" id = "orphanage">
        <h4>Help Build an Orphanage</h4>
        <button class = "callToAction">Find out More</button>

    </div>
    <div class = "featurePostcard" id ="youthPavilion">
        <h4>Help build a Youth Pavilion</h4>
        <button class = "callToAction">Find out More</button>
    </div>
    <div class = "featurePostcard" id = "mobileClinic">
        <h4>Help Fund a Mobile Clinic</h4>
        <button class = "callToAction">Find out More</button>
    </div>
</div>
<div class = "donationFeature">
    <div class = "donationContent">
    <blockquote class = "statement">Haitian Hope is Seeking to Empower and Bring Hope to Haitian Citizens</blockquote>
    <em class = "subStatement">Donate to Support the Cause</em>
    <p></p>
    </div>
<div class = "paypalDonationForm">
    <div class = "donation-container"> Donation Form</div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_donations" />
        <input type="hidden" name="business" value="humanitarianeffort@haitianhope.org" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>

</div>
</div>
    <div class = "socialsgridfeat">
        <!--for a grid of social media icons-->
        <div class="grid-container">
            <div class="socgrid-item">
                <img src = "" alt = "">
            </div>
            <div class="socgrid-item">
                <img src = "" alt = "">
            </div>
            <div class="socgrid-item">
                <img src = "" alt = "">
            </div>
        </div>
    </div>
  <div>
      <h2>Other Ways to Donate</h2>
      <div class = "donationOptions">
          <div class = "formcategory">
              <h3>While You Shop</h3>
              <img src = "" alt ="">
              <p></p>
          </div>
          <div class = "formcategory">
              <h3>Checking off our Wishlist</h3>
              <img src = "" alt ="">
              <p></p>
          </div>
      </div>
  </div>
    <div class ="volunteerInformationGrid">
        <div class ="volGridItem">
            <img class = "volGridImg" src = "" alt = "">
            <h4>Development and Marketing</h4>
        </div>
        <div class ="volGridItem">
            <img class = "volGridImg" src = "" alt = "">
            <h4>Event Planner</h4>
        </div>
        <div class ="volGridItem">
            <img class = "volGridImg" src = "" alt = "">
            <h4>Board Member</h4>
        </div>
        <div class ="volGridItem">
            <img class = "volGridImg" src = "" alt = "">
            <h4>Blog Writer</h4>
        </div>
        <div class ="volGridItem">
            <img class = "volGridImg" src = "" alt = "">
            <h4>Photographer and Videographer</h4>
        </div>
        <div class ="volGridItem">
            <img class = "volGridImg" src = "" alt = "">
            <h4>Grant Writer</h4>
        </div>
    </div>
    <div>
<?php
require_once 'serverconn.php';
$firstName = filter_input(INPUT_POST, "fName");
$lastName = filter_input(INPUT_POST, "lName");
$email = filter_input(INPUT_POST, "email");
$emailVar = "@";
$message = filter_input(INPUT_POST, "message");


$interests = findInterests();
function findInterests(){
    $interest = array();
    if (filter_has_var(INPUT_POST, "dev")){
        $interest [] = filter_input(INPUT_POST, "dev");
    }
    if (filter_has_var(INPUT_POST, "board")){
        $interest [] = filter_input(INPUT_POST, "board");
    }if (filter_has_var(INPUT_POST, "writer")){
        $interest [] = filter_input(INPUT_POST, "writer");
    }
    if (filter_has_var(INPUT_POST, "fund")){
        $interest [] = filter_input(INPUT_POST, "fund");
    }
    if (filter_has_var(INPUT_POST, "photo")){
        $interest [] = filter_input(INPUT_POST, "photo");
    }
    if (filter_has_var(INPUT_POST, "grant")){
        $interest [] = filter_input(INPUT_POST, "grant");
    }
    return $interest;
}


if (!empty($firstName)&& !empty($lastName) && !empty($email) && !empty($interests)){

    if(strpos($email, $emailVar)){
        print "<p>Thank you for expressing your interest in volunteering with us!<br> We have received your information.</p>";
        $sql = "INSERT INTO volunteerInterest(id, firstName, lastName, email, interests, addtionalNote) VALUES(1, $firstName, $lastName, $email, $interests, $message);";
        //foreach($interests as $key => $value){
           // print $value;
       // }
    }
}else{
    print <<<HERE
<div class = "donation-container">Volunteer Interest Form</div>

<form method = "post" action = "donate.php">
<fieldset>
<legend>Please Enter your Name and Email Below.</legend>
<label for = "fName">First Name:</label>
<input id = "fName" name = "fName" type = "text" required>
<label for = "lName">Last Name:</label>
<input id = "lName" name = "lName" type = "text" required>
<label for = "email">Email:</label>
<input id = "email" name = "email" type = "email" required>
</fieldset>
<fieldset>
<legend>Select the areas you would like to volunteer in.</legend>
<div id = "interests">
<div class = "formgroup">
<input class = "userInputCheck" id = "developmentMarketing" name = "dev" type = "checkbox" value = "Development and Marketing">
<label class = "labelInterest" for = "developmentMarketing">Help us with Development and Marketing</label>
</div>
<div class = "formgroup">
<input class = "userInputCheck" id  = "board" name = "board" value = "Board Member" type = "checkbox">
<label class = "labelInterest" for = "board">Become a Board Member</label>
</div>
<div class = "formgroup">
<input class = "userInputCheck" id = "blogWriter" name = "writer" value ="Blog Writer" type = "checkbox">
<label class = "labelInterest" for = "blogWriter">Help Us Keep our Blog Updated</label>
</div>
<div class = "formgroup">
<input class = "userInputCheck" id = "fund" name = "fund" value = "Fundraising and Event Planning" type = checkbox>
<label class = "labelInterest" for = "fund">Help us with Fundraising and Event Planning</label>
</div>
<div class = "formgroup">
<input class = "userInputCheck" id = "photoVid" name = "photo" value = "Photographer and Videographer" type = "checkbox">
<label class = "labelInterest" for = "photoVid">Travel with us and Be a Photographer or Videographer</label>
</div>
<div class = "formgroup">
<input class = "userInputCheck" id = "grantWriting" name = "grant" value = "Grant Writing" type = "checkbox">
<label class = "labelInterest" for = "grantWriting">Help Us Find Grants for our Work</label>
</div>
</div>
</fieldset>
<label for = "message"></label>
<textarea id="message" name = "message" placeholder = "Addtional Voluteer Interests..."></textarea>
<button type = "submit" class = "callToAction">Submit</button>
</form>
HERE;
}

?>
    </div>
    <div id = "artBackground">
        <h3>Donate Supplies</h3>
        <ul class = "featureList">
            <li class = "featureListItem">Flip-flop and/or Crocs shoe wares</li>
            <li class = "featureListItem">Tennis Shoes</li>
            <li class = "featureListItem">Play-Doh</li>
            <li class = "featureListItem">Black Sharpies</li>
            <li class = "featureListItem">Markers</li>
            <li class = "featureListItem">Crayons</li>
            <li class = "featureListItem">Erasers</li>
            <li class = "featureListItem">Scissors</li>
            <li class = "featureListItem">Wet Wipes</li>
            <li class = "featureListItem">Glue Sticks</li>
            <li class = "featureListItem">Scotch Tape</li>
            <li class = "featureListItem">Award Stickers</li>
            <li class = "featureListItem">General School Supplies</li>
            <li class = "featureListItem">Lightweight Backpacks</li>
            <li class = "featureListItem">Math Flash Cards</li>
            <li class = "featureListItem">French/Creole Books</li>
            <li class = "featureListItem">Games</li>
            <li class = "featureListItem">Puzzles</li>
            <li class = "featureListItem">Barrettes</li>
            <li class = "featureListItem">Combs</li>
            <li class = "featureListItem">Rubber Bands(for hair)</li>
            <li class = "featureListItem">Ponytail Holders</li>
            <li class = "featureListItem">Headbands</li>
            <li class = "featureListItem">Bar Soap</li>
            <li class = "featureListItem">Band-Aids</li>
            <li class = "featureListItem">Dolls(dark-skinned)</li>
            <li class = "featureListItem">Small Toy Cars</li>
            <li class = "featureListItem">Balloons</li>
            <li class = "featureListItem">Marbles</li>
            <li class = "featureListItem">Jump-rope</li>
            <li class = "featureListItem">Bubbles</li>
            <li class = "featureListItem">Yo-Yos</li>
            <li class = "featureListItem">Frisbees</li>
            <li class = "featureListItem">Zip-lock Bags(all sizes)</li>
            <li class = "featureListItem">Anti-Bacterial Ointment</li>
            <li class = "featureListItem">Baking Soda</li>
            <li class = "featureListItem">Sea Salt</li>
            <li class = "featureListItem">Honey</li>
            <li class = "featureListItem">Children's and adult's Aspirin</li>
            <li class = "featureListItem">Kids Multivitamins</li>
            <li class = "featureListItem">Adult vitamins</li>
            <li class = "featureListItem">Water Purification Tablets</li>
            <li class = "featureListItem">YumEarth Organic Vitamin C Lollipops</li>
            <li class = "featureListItem">Garlic Pills</li>
            <li class = "featureListItem">Oregano Pills</li>
        </ul>
        <p class = "importantNote"><b>Notes:<br>
                *If you are representing a business with supplies you would like to donate, please contact us
                through our email directly about a donation option.
                <br><br>
                *There is no specific size and generic is very acceptable.  These items are easily obtained here in the
                United States but are truly life-changing in a country such as Haiti.
            </b></p>
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
</div>
</body>
</html>