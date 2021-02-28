<?php
    include "../verification/config.php";
    session_start();

    switch ($_GET['menu']) {
        case 'theDate':
            filtered($conn, $_GET['date']);
            break;
        
        default:
            # code...
            break;
    }

    function filtered($conn, $date){
         // write query 
    $sql = "SELECT * FROM expense WHERE userID='".$_SESSION['id']."' and date(timestamp) = '".$date."'";

    // execute query
    $result = mysqli_query($conn, $sql);

    if(!$result){
      die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
    }else{
        $totalSpent = 0;
        while ($data = mysqli_fetch_array($result)){
            $totalSpent += $data['amount'];
            echo '<div class="row no-gutters mb-3 d-flex shadow-sm border mt-3 rounded "  >
            <div class="flex-grow-1 p-2 pl-3" style="vertical-align: middle;">
            <p class="desc font-weight-bolder mb-3" style="font-size:25px;">'.$data['description'].'</p>
                <div class="font-weight-bolder d-flex justify-content-around " style="font-size:25px;">
                    <p class="cat font-weight-lighter font-italic " style="font-size:20px;"> Category: '.$data['category'].'</p>
                    <p class="meth font-weight-lighter font-italic" style="font-size:20px;">Payment: '.$data['paymentmethod'].'</p>
                </div>
                <div>
                    <div class="container-fluid justify-content-around ">
                        <div class="row ">
                          <div class="col-sm">
                          <div class="card-footer bg-transparent border-success">'.$data['timestamp'].'</div>
                            
                          </div>
                          
                        </div>
                      </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center border-left" style="width:250px; border-color:var(--n-grey)">
                <h1 class="font-weight-lighter" style="font-size:30px;">GHS'.$data['amount'].'</h1>
                
            </div>
            <div class="d-flex align-items-center justify-content-around border-left util1" id="util1" data-toggle="modal" data-target="#editexpense" style="width:140px; border-color:var(--n-grey)">
                <a id="'.$data['ID'].'" class="event-button "  data-toggle="tooltip" data-placement="top" title="Edit" href="?id_edit=$id">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
                                
              </div>
              
              <div class="d-flex align-items-center justify-content-around border-left util2" id="util2"  data-toggle="modal" data-target="#deleteexpense" style="width:140px; border-color:var(--n-grey)">
                  <a id="'.$data['ID'].'" class="event-button"  data-toggle="tooltip" data-placement="top" title="Delete" href="?id_delete=$id">
                      <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                  </a>
              </div>
            
        </div>';
        }

        // Update total amount
        echo "<script> document.getElementById('total').innerHTML = 'GHS' + $totalSpent; </script>";
    }
    }
   

?>