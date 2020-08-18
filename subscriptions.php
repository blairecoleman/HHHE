<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Haitian Hope Humanitarian Effort</title>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<nav>
    <a href = "impact.html">Impact</a>
     <a href = "donate.html">Donate</a>
     <a href = "http://www.haitianhope.org/blog/">Blog</a>
     <a href = "trips.html">Trips</a>
</nav>
<main>
    <div>


    </div>
    <?php
    //require_once 'php/config.php';

    //Validation
$email = filter_input(INPUT_POST, "subemail");
$validEmail = "@";


if (strpos($email, $validEmail)){
    print "<blockquote> Thank you for your Subscription!</blockquote>";
} else {
    print <<<HERE
    <!--Subscription Form-->
    <form action = "subscriptions.php" method = "post">
        <label for = subname>Name: </label>
        <input id = "subname" type = "text" name = "name">
        <label for = "subemail">Enter Your Email Below</label>
        <input type = "email" id = "subemail" name ="email" placeholder = "youremail@email.com">
        <button type = "submit">Subscribe</button>
    </form>
</div>
HERE;
}


    //$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
    //$email = $_POST['subemail'];
    //if(emailvalidation($email) !== false){
       // $sql = "INSERT INTO emails (email) VALUE ('$email')";
    //}
    //if(!mysqli_query($link,$sql)){
        //echo 'Error, email not saved';
    //}
    //else{
        //echo 'Saved';
    //}

    //header( "refresh: 2; url = index.html");

    ?>
</main>
</body>
</html>