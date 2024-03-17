<?php
include_once '../config.php';

if(isset($_POST['registerBTn'])) {
    extract($_POST);

    $passwrd = md5($passwrd);

    $insert = "INSERT INTO user_account (username, email, password, role) VALUES ('$username', '$email', '$passwrd', 'user');";

    try {
        if (mysqli_query($con, $insert)) {
            $_SESSION['login_name'] = $username;
            $_SESSION['user_role'] = 'user';
            echo "<script> location.href='../indexx.php'</script>";
        }
    } catch (\Throwable $th) {
        if (mysqli_errno($con) == 1062) {
            $err = explode(' ', mysqli_error($con));
            $error = trim($err[5], "");
            echo "<script> location.href='../register.php?error=[$error]' </script>";
        } else {
            print_r(mysqli_error($con));
        }
    }
}

?>
