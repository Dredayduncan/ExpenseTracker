<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="styling.css"> -->
    <style>
      *{
            margin: 0;
            padding:0;
            font-family: "Century Gothic";
        }

        header{
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(assets/img/expenseimage.jpeg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        ul{
            float:right;
            list-style-type: none;
            margin-top:25px;
        }

        ul li{
            display: inline-block ;
        }

        ul li a{
            text-decoration: none;
            color: white;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }

        ul li a:hover{
            background-color: white;
            color: black;
        }

        ul li.active a{
            background-color: white;
            color: black;
        }

        .logo img{
            margin-top: 10px;
            float: left;
            width: 120px;
            height: 90px;
        }

        .main{
            max-width: 1200px;
            margin: auto;
        }

        .title{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

        .title h1{
            color: white;
            font-size: 60px;
            width: 120%;
        }

        .button{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%,-50%);
            
        }

        .btn{
            border: 1px solid white;
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .btn:hover{
            background-color: white;
            color: black;
        }

    </style>

    <title>xPense Tracker</title>
  </head>
  <body>

    <header>
     
      <div class="title">
          <h1>Welcome to the ExpenseTracker </h1>
      </div>

      <div class=" button justify-content-around">
          <a href="verification/LogIn.php" class="btn">Log In</a>
          <a href="verification/SignUp.php" class="btn">Sign Up</a>
          

      </div>
  </header>














      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


      <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      -->
    


  </body>

</html>