<?php
if(isset($_POST['signup-submit'])) {

require 'dbh.inc.php';

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];

if (empty($fName) || empty($lName) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("location: ../admin/insertreq.php?error=emptyfields&fName=".$fName."&lName=".$lName."&mail=".$email);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: ../admin/insertreq.php?error=invalidmail&fName=".$fName."&lName=".$lName);
    exit();
}
else if ($password !== $passwordRepeat) {
    header("location:  ../admin/insertreq.php?error=passwordcheck&mail=".$email);
    exit();
}
else
    $sql = "SELECT emailUsers FROM USERS WHERE emailUsers ='".$_REQUEST['mail']."'";
    $result = $conn->query($sql);
    if($result->num_rows==1){
        header("location: ../admin/insertreq.php?error=userregistered");
        exit();
    }

else {

    $sql = "INSERT INTO users (fName, lName, emailUsers, pwdUsers) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admin/insertreq.php?error=sqlerror");
        exit();
    }
    else {
        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);


        mysqli_stmt_bind_param($stmt, "ssss", $fName, $lName, $email, $hashedpwd);
        mysqli_stmt_execute($stmt);
        header("location: ../admin/requester.php?signup=success");
        exit();
    }
}

mysqli_close($conn);
}
