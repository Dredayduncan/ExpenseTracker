<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <title>Log In</title>
      <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
  </head>
  <body class = "container-fluid mt-5"  style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(../assets/img/expenseimage.jpeg); height: 100vh; background-size: cover; background-position: center;">

    <div class=" container-fluid justify-content-center d-flex w-100 p-3 ">
        
        <form class=" text-center bg-white mt-5 border border-light p-5 shadow-lg rounded" style="width: 35%;" action="loginBack.php" method="POST" id="Sign-in-form">
            
           
            
            <p class="h4 mb-4">Log In</p>
            <p class="mb-4"><em></em></p>

            
             <div class="row no-gutters"><div id="error-block-email" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
              <div class="form-group row no-gutters mb-4">
                  <label class="col-md-4 col-form-label text-left" for="email">Email address:</label>
                  <div class="col-md-8">
                      <input type="email" id="email" name="email" class="form-control">
                  </div>
              </div>


            
           
           

            
              <div class="row no-gutters"><div id="error-block-password" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
            <div class="form-group row no-gutters mb-4">
                <label class="col-md-4 col-form-label text-left" for="pword">Password:</label>
                <div class="col-md-8">
                    <input type="password" id="pword" name="pword" class="form-control">
                </div>
            </div>

           

            <div class="d-flex justify-content-end mb-4">
              <button class="btn btn-success btn-block btn-info my-4 mx-auto "  name="login" type="submit">Log in</button>
          </div>
            
            <p>New here ? Click <a class="a" href="SignUp.php">here</a> to sign up now!</p>
            
        </form>
        
    

    </div>

    
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src = "../assets/js/login_validate.js"></script>
</body>
</html>