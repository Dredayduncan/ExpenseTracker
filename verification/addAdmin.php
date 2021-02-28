<?php

     //Establish Database Connection
     include "config.php";

     #Get form data
     
     $user = $_POST['uname'];
     $email = $_POST['email'];
     $password = $_POST['pword'];
     
     $pass = password_hash($password, PASSWORD_DEFAULT);
 
 
     //Check if email exists
     $query = "SELECT * FROM user where email='".$email."'";
 
     // execute query
     $result = mysqli_query($conn, $query);
 
     //Check if email is present
     if (mysqli_num_rows($result) != 0) {
         header("Location: ../admin/admin.php?notice=Email already exists!");
         die;
     }
     else{
         //Insert records to database
         $query = "INSERT into admin (username, email, password) VALUES ('$user', '$email', '$pass')";
 
         // execute query
         $result = mysqli_query($conn, $query);
 
         if ($result){
             header("Location: ../admin/admin.php?notice=Account has been successfully created!");
         }
 
         die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
     }
 

?>