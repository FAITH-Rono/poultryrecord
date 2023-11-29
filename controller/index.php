<?php 
session_start();
require "connection.php";
$email = "";
$username = "";
$password = "";
$errors = array();

//if user signup button
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if($password !== $cpassword){
        $errors['password'] = "connfirm password not matched!";
    }
    $email_check = "SELECT * FROM register_users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";

    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO register_users (username, email, password)
         VALUES ('$username', '$email', '$encpass')";

        if (mysqli_query($conn, $sql)) {
                $_SESSION['email'] = $email;
                header('location: index.php');

        } else {
            header('location: register.php?invalid register');

          echo "Error: " . $sql . "<br>" . mysqli_error($connn);
        }
}

}


    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM register_users WHERE email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                header('location: index.php');
               }
        }
    }