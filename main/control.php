<?php
    include '../verification/config.php';
    session_start();

    // Logout
    if(isset($_POST['signout'])){
        header('Location: ../verification/login.php'); 
		session_destroy();
        die;
    }

    switch ($_POST['delete']) {
        case 'confam':
            //Insert records to database
            $query = "DELETE from expense WHERE ID = '".$_POST['expenseID']."'";
            
            // execute query
            $result = mysqli_query($conn, $query);

            // Check if query is executed
            if ($result){
                echo header("Location: dashboard.php?notice=New record has been deleted successfully!");
            }else{
                echo die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
            }
            break;
        
        default:
            # code...
            break;
    }

    // Get form data
    $id = $_SESSION["id"];
    $amount = $_POST["amount"];
    $cat = $_POST["category"];
    $payment = $_POST["method"];
    $desc = $_POST["description"];


    if (isset($_POST['add'])){
        
        // Insert records to database
        $query = "INSERT into expense (amount, category, paymentmethod, description, userID)
        VALUES ('$amount', '$cat', '$payment', '$desc', '$id')";

        // execute query
        $result = mysqli_query($conn, $query);

        // Check if query is executed
        if ($result){
            header("Location: dashboard.php?notice=New record has been inserted successfully!");
        }else{
            die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
        }
    }
    elseif (isset($_POST['edit'])){
        //Insert records to database
        $query = "UPDATE expense SET amount ='".$amount."', category = '".$cat."', paymentmethod = '".$payment."',
        description = '".$desc."' WHERE ID = '".$_POST['expenseID']."'";

        // execute query
        $result = mysqli_query($conn, $query);

        // Check if query is executed
        if ($result){
            header("Location: dashboard.php?notice=New record has been updated successfully!");
        }else{
            die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
        }
    }
?>