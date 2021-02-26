<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <title>Sign Up</title>
      <link href="assets/style.css" type="text/css" rel="stylesheet">
     
  </head>
  <body class = "container-fluid mt-5" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(assets/img/expenseimage.jpeg); height: 100vh; background-size: cover; background-position: center;" >

    <div class="justify-content-center d-flex w-100 p-3 " >
        
        <form class=" text-center bg-white mt-5 border border-light p-5 shadow-lg rounded" style="width: 35%;" action="#" method="POST" id="Sign-up-form">
            
           
            
            <p class="h4 mb-4">Sign Up</p>
            <p class="mb-4"><em></em></p>

            
            <div class="row no-gutters"><div id="error-block-uname" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
              <div class="form-group row no-gutters mb-4">
                  <label class="col-md-4 col-form-label text-left " for="uname">Username:</label>
                  <div class="col-md-8">
                        <input  type="text" id="uname" name="uname" class="form-control">
                  </div>
              </div>

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

            <div class="row no-gutters"><div id="error-block-repassword" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
            <div class="form-group row no-gutters">
                <label class="col-md-4 col-form-label text-left" for="spassword2">Reenter password:</label>
                <div class="col-md-8">
                    <input type="password" id="pword2" name="pword2" class="form-control">
                </div>
            </div>

            
            <!-- <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-success" href="Overview.html" role="button">Log In</a>
               <button type="button" class="btn btn-success" name="login" type="submit">Log In</button> -->
                
         
            <!-- </div> --> 

            <div class="d-flex mb-4 ml-2">
               
              <button class="btn btn-success btn-block btn-info my-4 mx-auto" style="width: 150px;" name="login" type="submit">Sign in</button>
          </div>
            
            <p>Already have a account ? Click <a class="a" href="LogIn.php">here</a> to sign in now!</p>
            
        </form>
        
    

    </div>

    
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src = "assets/signup_validate.js"></script>
</body>
</html>