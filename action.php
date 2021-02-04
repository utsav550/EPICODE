<?php

if (isset($_POST['submit'])) {

    $username = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $service = $_POST['service'];
    $other = $_POST['subject'];

   
    $msg = "First Name " . $username . "\nLast Name " . $lname . "\n Email " . $email . "\n Mobile " . $mobile . "\nCountry " . $country . " \nService  " . $service . "\nOther info  " . $other;
}


if (empty($username) || empty($lname) || empty($email) || empty($mobile) || empty($country) || empty($service)) {



    header('Location: index.php?error#contact');
}
if ($service == "Service") {
    header('Location: index.php?service#contact');
    echo $country, $service;
}
if ($country == "Countries") {
    header('Location: index.php?country#contact');
} else {
    $to = 'epicode404@gmail.com';
    if (mail($to, $service, $msg, $email)) {
      
       header('Location: index.php?success#contact');
    }
}



