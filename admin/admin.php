<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <title>Expense Tracker</title>
    <!--<link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />-->
 
    
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">xPenseTracker</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark ">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin.php">
                        <!-- Logo icon --><b>
                            <a style="font-size: large; color:black;">xPenseTracker</a>

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                        
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                    
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <!--<span><img src="../assets/images/logo-icon.png" alt="elegant admin template"></span>-->
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                        class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li id='user'> <a class="waves-effect waves-dark" aria-expanded="false">
                            <i class="fa fa-user"></i><span class="hide-menu">user</span></a>
                        </li>
                        <li id='accountsummary'> <a class="waves-effect waves-dark" aria-expanded="false">
                            <i class="fa fa-book"></i><span class="hide-menu">accountsummary</span></a>
                        </li>
                        <li id='expense'> <a class="waves-effect waves-dark" aria-expanded="false">
                            <i class="fa fa-credit-card"></i><span class="hide-menu">expense</span></a>
                        </li>
                        <li id='income'> <a class="waves-effect waves-dark" aria-expanded="false">
                            <i class="fa fa-money"></i><span class="hide-menu">income</span></a>
                        </li>
                        <li id='admin'> <a class="waves-effect waves-dark" aria-expanded="false">
                            <i class="fa fa-university"></i><span class="hide-menu">admin</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb"><!--
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>-->
                            </ol>
                            <!--<a class="btn btn-success d-none d-lg-block m-l-15"
                                href="https://wrappixel.com/templates/elegant-admin/"> Upgrade To Pro</a>-->
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="container">
                                        <div class="row">
                                          <div class="col ">
                                            <h5 class="card-title"></h5>
                                          </div>
                                          <div class="col ">
                                            <a class="btn btn-success" role="button" data-toggle="modal" data-target="#adduser">Add New Admin</a> 
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id='tab' class="table table.responsive" style="height: 650px; overflow-y: scroll;  overflow-x: hidden;">
                                <table class="table table-hover mb-0  " width="100%" ></table>
                           
                        </div>


                    </div>

                    
                </div>
              

                                            <!-- Modal add user -->
                                            <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class=" text-center  p-5  rounded" action="../verification/addAdmin.php"  method="POST" id="Sign-up-form">

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
                                    
                                    
                                        <div class="d-flex mb-4 ml-2">
                                           
                                          <button class="btn btn-success btn-block btn-info my-4 mx-auto" style="width: 150px;" name="login" type="submit">Add</button>
                                      </div>
                                        
                                        
                                        
                                    </form>
                                </div>
                             
                                
                            </div>
                            </div>
                        </div>

                           <!-- Modal delete -->
                 <div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Delete User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                Are you sure you want to delete this user ?
                                </div>
                                <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button id='delete' name='confam' type="button" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                    </div>

                


            </div>
        </div>

                
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- ADMIN JS -->
    <script src="dist/js/admin.js"></script>
</body>

</html>





