<?php
    
    //Establish Database Connection
    include "config.php";

    #Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['uname'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $limit = $_POST['limit'];
    $pass = password_hash($password, PASSWORD_DEFAULT);


    //Check if email exists
    $query = "SELECT * FROM user where email='".$email."'";

    // execute query
    $result = mysqli_query($conn, $query);

    //Check if email is present
    if (mysqli_num_rows($result) != 0) {
        header("Location: ../index.php?notice=Email already exists!");
        die;
    }
    else{
        //Insert records to database
        $query = "INSERT into user (firstname, lastname, username, phonenumber, email, password, dailylimit)
                  VALUES ('$fname', '$lname', '$user', '$phone', '$email', '$pass', '$limit')";

        // execute query
        $result = mysqli_query($conn, $query);

        if ($result){
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $password;

            header("Location: login.php?notice=Account has been successfully created!");
        }

        die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
    }
    

    // //Get Image Upload path
    // $targetDir = "uploads/";
    // $fileName = basename($_FILES["file"]["name"]);
    // $targetFilePath = $targetDir . $fileName;

    // //Get file type
    // $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    

    // //Check if file is an image and upload it to the server
    // $allowTypes = array('jpg', 'JPG', 'png','jpeg','gif','pdf');
    // if(in_array($fileType, $allowTypes)){

    //     // Upload file to server
    //     if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
    //         echo "true";
    //     }
    //     else{
    //         echo "false";
    //         die;
    //     }
    // }

?>