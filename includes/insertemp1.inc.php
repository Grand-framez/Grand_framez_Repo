<?php
if(isset($_POST['signup-submit'])) {

require 'dbh.inc.php';

$fName = $_POST['empName'];
$empcity = $_POST['empCity'];
$empmobile = $_POST['empMobile'];
$email = $_POST['empEmail'];


if (empty($fName) || empty($empcity) || empty($email) || empty($empmobile)) {
    header("location: ../admin/insertemp.php?error=emptyfields&fName=".$fName."&mail=".$email."&city=".$empcity."&mobile=".$empmobile);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: ../admin/insertemp.php?error=invalidmail&fName=".$fName);
    exit();
}
else if ($password !== $passwordRepeat) {
    header("location:  ../admin/insertemp.php?error=passwordcheck&mail=".$email);
    exit();
}
else
    $sql = "SELECT empEmail FROM photographers WHERE empEmail ='".$_REQUEST['empEmail']."'";
    $result = $conn->query($sql);
    if($result->num_rows==1){
        header("location: ../admin/insertemp.php?error=userregistered");
        exit();
    }

else {

    $sql = "INSERT INTO photographers (empName, empCity, empMobile, empEmail) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admin/insertemp.php?error=sqlerror");
        exit();
    }
    else {
        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);


        mysqli_stmt_bind_param($stmt, "ssss", $fName, $empcity, $empmobile, $email);
        mysqli_stmt_execute($stmt);
        header("location: ../admin/photographers.php?signup=success");
        exit();
    }
}

mysqli_close($conn);
}
