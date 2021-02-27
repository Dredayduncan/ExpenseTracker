

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">


    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../assets/css/dash.css" type="text/css" rel="stylesheet">

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
        <a class="nav-link" href="Dashboard.php">Overview <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Statistics</a>
      </li>
      
    </ul>

    
    <div class="card d-flex flex-wrap align-content-center username" >
      <div class="container">
        Hi, Username!
      </div>
      
    </div>
    

    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Log Out</button>
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
                  
               

                <div class="row no-gutters mb-3 d-flex shadow-sm border mt-3 rounded" >
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

                    <div class="d-flex justify-content-center align-items-center border-left" style="width:140px; ">
                        <h1 class="font-weight-lighter" style="font-size:30px;">-$99.00</h1>
                        
                    </div>
                    <div class="d-flex align-items-center justify-content-around border-left" id="util1"data-toggle="modal" data-target="#editexpense" style="width:140px;">
                                        <a class="event-button "  data-toggle="tooltip" data-placement="top" title="Edit" href="?id_edit=$id">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        
                      </div>
                      
                      <div class="d-flex align-items-center justify-content-around border-left" id="util2"  data-toggle="modal" data-target="#deleteexpense" style="width:140px; ">

                                        <a class="event-button"  data-toggle="tooltip" data-placement="top" title="Delete" href="?id_delete=$id">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </a>
                      </div>
                    
                </div>
                
           
            </div>
             
            <div id="scan-button" class="fixed d-flex justify-content-center align-items-center shadow bg-warning" data-toggle="modal" data-target="#scanexpense">
                
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                  </svg>
                </span>
            </div>

            <div id="add-button" class="fixed d-flex justify-content-center align-items-center shadow bg-warning" data-toggle="modal" data-target="#addexpense">
                
                <span>
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </span>
            </div>
           

              <!-- Modal scan expense -->
            <div class="modal fade" id="scanexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Scan Expense</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <button type="button" class="btn ">

                    <div class="modal-body d-flex justify-content-center " id = "scanimg">
                      
                     

                        <svg xmlns="http://www.w3.org/2000/svg" width="5em" height="10em" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                      </svg>
                
                    </div>
                     <form action="" style = "display: none;">
                          <div class="form-group row no-gutters mb-4">
                              <label class="col-md-4 col-form-label text-left" for="img"></label>
                              <div class="col-md-8">
                                  <input type="file" id="img" name="img" class="form-control">
                              </div>
                          </div>
                      
                      </form>                                          
                  </button>
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-primary">Save </button>
                    </div>
                  </div>
                </div>
              </div>
                

              <!-- Modal add expense -->
            <div class="modal fade" id="addexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header ">
                    <h5 class="modal-title text-center " id="exampleModalLongTitle">Add Expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  

                  <form class=" text-center mt-5  border-light p-5  rounded"style="width: 100%;"  action="#" method="POST" id="Add expense">
                    
                      <div class="form-group row no-gutters mb-4">
                          <label class="col-md-4 col-form-label text-left" for="amount">Amount:</label>
                          <div class="col-md-8">
                              <input type="number" id="amount" name="amount" class="form-control">
                          </div>
                      </div>

                    <div class="form-group row no-gutters mb-4">
                        <label class="col-md-4 col-form-label text-left" for="category">Category:</label>
                        <div class="col-md-8">
                            <input type="text" id="category" name="category" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row no-gutters mb-4">
                        <label class="col-md-4 col-form-label text-left" for="method">Payment:</label>
                        <div class="col-md-8">
                            <input type="text" id="method" name="method" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row no-gutters mb-4">
                        <label class="col-md-4 col-form-label text-left" for="pword">Description:</label>
                        <div class="col-md-8">
                            <input type="text" id="description" name="description" class="form-control">
                        </div>
                    </div>

                  </form>

                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary">Save </button>
                  </div>
                </div>
              </div>

              


            

            

</div>
                  <!-- Modal delete -->
                  <div class="modal fade" id="deleteexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Delete Expense</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this entry ?
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                      <button type="button" class="btn btn-primary">Yes</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal edit expense-->
              <div class="modal fade" id="editexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                        <div class="modal-header ">
                          <h5 class="modal-title text-center " id="exampleModalLongTitle">Edit Expense</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        

                        <form class=" text-center mt-5  border-light p-5  rounded"style="width: 100%;"  action="#" method="POST" id="Add expense">
                          
                            <div class="form-group row no-gutters mb-4">
                                <label class="col-md-4 col-form-label text-left" for="amount">Amount:</label>
                                <div class="col-md-8">
                                    <input type="number" id="amount" name="amount" class="form-control">
                                </div>
                            </div>

                          <div class="form-group row no-gutters mb-4">
                              <label class="col-md-4 col-form-label text-left" for="category">Category:</label>
                              <div class="col-md-8">
                                  <input type="text" id="category" name="category" class="form-control">
                              </div>
                          </div>

                          <div class="form-group row no-gutters mb-4">
                              <label class="col-md-4 col-form-label text-left" for="method">Payment:</label>
                              <div class="col-md-8">
                                  <input type="text" id="method" name="method" class="form-control">
                              </div>
                          </div>

                          <div class="form-group row no-gutters mb-4">
                              <label class="col-md-4 col-form-label text-left" for="pword">Description:</label>
                              <div class="col-md-8">
                                  <input type="text" id="description" name="description" class="form-control">
                              </div>
                          </div>

                        </form>

                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-primary">Save </button>
                        </div>
                      </div>
                    </div>

                  

              

    
            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

              <script src = "../assets/js/dash.js"></script>
              
</body>


</html>