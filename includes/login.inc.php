<?php
if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
    header("location: ../login.php?error=emptyfields");
    exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=sqlerror");
        exit();
    }
    else {

        mysqli_stmt_bind_param($stmt, "s", $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            if ($pwdCheck == false) {
            header("location: ../login.php?error=wrongpwd");
            exit();
            }
            else if ($pwdCheck == true) {
                session_start();
                $_SESSION['is_login'] = true;
                $_SESSION['userId'] = $row['idUsers'];
                $_SESSION['email'] = $row['emailUsers'];
                $_SESSION['fName'] = $row['fName'];
                $_SESSION['lName'] = $row['lName'];

            header("location: ../memberLogin/user.login.success.php?login=success");
            exit();
            }
            else {
            header("location: ../login.php?error=wrongpwd");
            exit();
            }
        }
        else {
            header("location: ../login.php?error=nouser");
            exit();
        }

    }

    }
}
else {
    header("location: ../login.php");
    exit();
}