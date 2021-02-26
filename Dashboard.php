

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/dash.css" type="text/css" rel="stylesheet">

</head>


<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">xPENSE</a>

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
    <div class="card" style="width: 10rem; heignt:8rem;">
      <div class="card-body">
        Hi Username !
      </div>
    </div>
    </form>

    <form class="form-inline my-2 my-lg-0">
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
                    <div class="d-flex align-items-center justify-content-around border-left" id="util1" style="width:140px; border-color:var(--n-grey)">
                                        <a class="event-button "  data-toggle="tooltip" data-placement="top" title="Edit" href="org_edit_frontend.php?id_edit=$id">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                      </div>
                      <div class="d-flex align-items-center justify-content-around border-left" id="util2" style="width:140px; border-color:var(--n-grey)">

                                        <a class="event-button"  data-toggle="tooltip" data-placement="top" title="Delete" href="org_delete.php?id_delete=$id">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </a>
                      </div>
                    
                </div>
                
                
                     
                <div id="add-button" class="fixed d-flex justify-content-center align-items-center shadow bg-warning">
                <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                <span>
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </span>
            </div>

            </div>
             

        
    

            
</body>


</html>