<?php


        //save variables from validated form
    $name = $_POST['firstname' . 'lastname'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];
        $visitor_email = $_POST['email'];
        $updates = $_POST['updates'];
        $phone = $_POST['phone'];
        $add = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST ['state'];
        $zip = $_POST['zip'];
        $inter = $_POST['interest'];
        $summ = $_POST['summary'];
        $avail = $_POST['avail'];
        $skill = $_POST['skill'];
        if (!empty('firstname') || !empty('lastname') || !empty('email') || !empty ('updates') || !empty('phone') ||
            !empty('address') || !empty('city') || !empty ('state') || !empty('zip') || !empty('interest') || !empty('summary')
        || !empty('avail') || !empty('skill'))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "international";
    $dbName = "haitianhope";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT First From volinterest Where First = ? Limit 1";
        $INSERT  = "";
    }
} else{
            echo "All fields required";
            die();
}
//email content
    $email_from = "humanitarianeffort@haitianhope.org";
        $email_subject = "New Volunteer Form Submission";
        $message_user = " $name,\nThank you for your interest in Volunteering with Haitian Hope Humanitarian Effort Inc. \nWe have received your volunteer interest form.\n The Following is the information we received.\n";
        $message_hhhe = "You have received a volunteer entry from $name.\n See the following for form information:\n ";
        $form_info = "$phone.\n$add.\n$city.\n$state.\n$zip.\n$inter.\n$summ.\n$avail.\n$skill";
//to hhhe email
        $to = "humanitarianeffort@haitianhope.org";
        $headers = "From: $email_from \r\n";
        $email_body = $message_hhhe . $form_info;
        mail($to, $email_subject, $email_body);

//to user
        $to = $visitor_email;
        $headers = "From: $email_from \r\n";
        $email_body = $message_user . $form_info;

        mail($to, $email_subject, $email_body, $headers);
        echo "Thank You Your Form has been submitted. You should receive an email for confirmation.";




