

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>


<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">XPENSE</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Dashboard.html">Overview <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Statistics</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
    </form>
  </div>
</nav>


    
<!-- Jumbotron -->
    <div class="jumbotron p-3 mb-2 bg-warning text-dark jumbotron-fluid text-center" style = "background:#333;">
        <div class="d-flex container-fluid justify-content-center">
            <div class="row">
              <div class="col-sm ">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                  </svg>
              </div>
              <div class="col-sm">
                <div class="container">
                    <h1 class = "display-3"> Wallet </h1>
                   
                </div>
              </div>
              
            </div>
          </div>
        

       

    </div>



        <!-- Content with cards -->
        <!--                                              FIRST ROW                                   -->
            <div class="container mt-4">
                <div class="card text-center shadow rounded">
                    <div class="card-header lead bg-dark text-white font-weight-bolder">
                      Total Amount Spent
                    </div>
                    <div class="card-body">
                      <h5 class="card-title font-weight-lighter" style="font-size:50px;">$500</h5>
                      
                      
                    </div>
                    
                  </div>
                  
               

                <div class="row no-gutters mb-3 d-flex shadow-sm border mt-5 rounded" >
                    <div class="flex-grow-1 p-2 pl-3" style="vertical-align: middle;">
                        <div class="font-weight-bolder" style="font-size:25px;">
                            <p>Restaurant and Cafe</p>
                        </div>
                        <div>
                            <div class="container-fluid justify-content-around ">
                                <div class="row ">
                                  <div class="col-sm">
                                    20th August 2021
                                  </div>
                                 
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center border-left" style="width:140px; border-color:var(--n-grey)">
                        <h1 class="font-weight-lighter" style="font-size:30px;">-$99.00</h1>
                        
                    </div>
                    
                </div>
                
                
                     


            </div>
             

        
    

    
</body>


</html>