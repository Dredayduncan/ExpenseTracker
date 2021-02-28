<?php
include "config.php";

//Get Login Data
$email = $_POST['email'];
$pass = $_POST['pword'];

if ($email == "admin@admin.com" && $pass == "admin"){
    header("Location: ../admin/admin.php");
    die;
}

// write query
$sql = "SELECT * FROM admin WHERE email='".$email."'";

// execute query
$result = mysqli_query($conn, $sql);

// check that exactly 1 row was returned 
if (mysqli_num_rows($result) != 1) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: login_admin.php?error=Email does not exist!");
    die;
}

// get query result as an array
$admin = mysqli_fetch_assoc($result);
// verify admin password match

if (password_verify($pass, $admin['password'])) {
    //Make necessary info globally accessible
    session_start();
    $_SESSION['id'] = $admin['adminID'];

    //Reroute to email page
    header("Location: ../admin/admin.php");
    die;
}
else{
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: login_admin.php?error=Your Password is Incorrect!");
    die;
}
?>