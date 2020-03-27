<?php

if (isset($_POST['submit'])) {
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$mailFrom = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailTo = "info@grandframez.com.au";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$fname.".\n\n".$message;

mail($mailTo, $txt, $headers, $phone);
header("Location: ../contact.php?mail=sent");
}


if(isset($_REQUEST['submit'])){
    if($fname == ""){
        header("location: ../contact.php?error=emptyfields");
    exit();
    }
        else if($lname == ""){
            header("location: ../contact.php?error=emptyfields");
        exit();
        }
        else if($mailFrom == ""){
            header("location: ../contact.php?error=emptyfields");
        exit();
        }
        else if($phone == ""){
            header("location: ../contact.php?error=emptyfields");
        exit();
        }
        else if($message == ""){
            header("location: ../contact.php?error=emptyfields");
        exit();
        }
    }