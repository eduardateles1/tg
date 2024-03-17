<?php
include_once '../config.php';

if(isset($_POST['loginBtn'])){
    extract($_POST);

    $passwrd = md5($passwrd);

    $select = "SELECT * FROM user_account WHERE (email='$username' OR username='$username') AND password='$passwrd'";
    
    $res = mysqli_query($con, $select);

    if(mysqli_num_rows($res) > 0){

        $data=mysqli_fetch_assoc($res);
        $_SESSION['login_name'] = $data['username '];
        $_SESSION['user_role'] = $data['role '];
        echo "<script> location.href='../indexx.php';</script>";
    }
    else{
        $erro="Inválido";
        echo "<script> location.href='../index.php?error=[$error]'; </script>";

    }
}
?>
