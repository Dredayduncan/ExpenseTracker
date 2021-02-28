<?php
    include "../verification/config.php";

    switch ($_GET['menu']) {
        case 'user':
            userInfo($conn);
            break;
        case 'accountsummary':
            accountSummary($conn);
            break;
        case 'expense':
            expenseInfo($conn);
            break;
        case 'income':
            incomeInfo($conn);
            break;
        case 'admin':
            adminInfo($conn);
            break;
        case 'delete';
            $info = explode("-", $_GET['record']);
            remove($conn, $info[0], $info[1]);
            break;
        default:
            break;
    }

    // Get user table data
    function userInfo($conn){
        $tabData = "SELECT * FROM user";
        $tabHead = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'xpensedb' AND TABLE_NAME = 'user'";

        $checkHead = mysqli_query($conn, $tabHead);
        $check = mysqli_query($conn, $tabData);

        if (!$checkHead){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }else{
            echo '<thead style ="position: sticky; ">
                <tr>';
            while($data = mysqli_fetch_array($checkHead)){
                if ($data['COLUMN_NAME'] != 'password'){
                    echo '
                    <th class="text-center">'.$data['COLUMN_NAME'].'</th>
                    ';
                }
            }

            echo '</tr>
            </thead>';
        }

        if (!$check){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }
        else{
            echo '<tbody>';
            while($data = mysqli_fetch_array($check)){
                echo '
                    <tr class = "border ">
                        <td class="text-center">'.$data['userID'].'</td>
                        <td class="txt-oflo">'.$data['firstname'].'</td>
                        <td class="txt-oflo">'.$data['lastname'].'</td>
                        <td class="txt-oflo">'.$data['username'].'</td>
                        <td class="txt-oflo">'.$data['phonenumber'].'</td>
                        <td class="txt-oflo">'.$data['email'].'</td>
                        <td class="txt-oflo text-success">GHS'.$data['dailylimit'].'</td>
                        <td id="user-'.$data['userID'].'" class="txt-oflo rm"><a class="btn btn-success" data-toggle="modal" data-target="#deleteuser"  
                        role="button" style="background-color: #9A2005;">Remove</a>
                        </td>
                    </tr>';
            }

            echo '</tbody>';
            echo '<script> 
                var id = "";

                $("td").on("click", function(){
                    id = $(this).attr("id");
            
                });                
            </script>';
        }    
    }

    // Get expenses table data
    function expenseInfo($conn){
        $tabData = "SELECT * FROM expense";
        $tabHead = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'xpensedb' AND TABLE_NAME = 'expense'";

        $checkHead = mysqli_query($conn, $tabHead);
        $check = mysqli_query($conn, $tabData);

        if (!$checkHead){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }else{
            echo '<thead style ="position: sticky; ">
                <tr>';
            while($data = mysqli_fetch_array($checkHead)){
                echo '
                    <th class="text-center">'.$data['COLUMN_NAME'].'</th>
                ';
            }

            echo '</tr>
            </thead>';
        }

        if (!$check){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }
        else{
            echo '<tbody>';
            while($data = mysqli_fetch_array($check)){
                echo '
                    <tr class = "border ">
                        <td class="text-center">'.$data['ID'].'</td>
                        <td class="txt-oflo">'.$data['amount'].'</td>
                        <td class="txt-oflo">'.$data['category'].'</td>
                        <td class="txt-oflo">'.$data['paymentmethod'].'</td>
                        <td class="txt-oflo">'.$data['description'].'</td>
                        <td class="txt-oflo">'.$data['timestamp'].'</td>
                        <td class="txt-oflo">'.$data['userID'].'</td>
                    </tr>';
            }

            echo '</tbody>';
        }    
            
    }

    // Get admin table data
    function adminInfo($conn){
        $tabData = "SELECT * FROM admin";
        $tabHead = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'xpensedb' AND TABLE_NAME = 'admin'";

        $checkHead = mysqli_query($conn, $tabHead);
        $check = mysqli_query($conn, $tabData);

        if (!$checkHead){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }else{
            echo '<thead style ="position: sticky; ">
                <tr>';
            while($data = mysqli_fetch_array($checkHead)){
                if ($data['COLUMN_NAME'] != 'password'){
                    echo '
                    <th class="text-center">'.$data['COLUMN_NAME'].'</th>
                    ';
                }
                
            }

            echo '</tr>
            </thead>';
        }

        if (!$check){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }
        else{
            echo '<tbody>';
            while($data = mysqli_fetch_array($check)){
                echo '
                    <tr class = "border ">
                        <td class="text-center">'.$data['adminID'].'</td>
                        <td class="txt-oflo">'.$data['username'].'</td>
                        <td class="txt-oflo">'.$data['email'].'</td>
                        <td id="admin-'.$data['adminID'].'" class="txt-oflo rm"><a class="btn btn-success" data-toggle="modal" data-target="#deleteuser"  
                        role="button" style="background-color: #9A2005;">Remove</a>
                        </td>
                    </tr>';
            }

            echo '</tbody>';
            echo '<script> 
                var id = "";

                $("td").on("click", function(){
                    id = $(this).attr("id");
            
                });                
            </script>';
        }
    }
    
    // Get accountsummary table data
    function accountSummary($conn){
        $tabData = "SELECT * FROM accountSummary";
        $tabHead = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'xpensedb' AND TABLE_NAME = 'accountsummary'";

        $checkHead = mysqli_query($conn, $tabHead);
        $check = mysqli_query($conn, $tabData);

        if (!$checkHead){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }else{
            echo '<thead style ="position: sticky; ">
                <tr>';
            while($data = mysqli_fetch_array($checkHead)){
                echo '
                    <th class="text-center">'.$data['COLUMN_NAME'].'</th>
                ';
            }

            echo '</tr>
            </thead>';
        }

        if (!$check){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }
        else{
            echo '<tbody>';
            while($data = mysqli_fetch_array($check)){
                echo '
                    <tr class = "border ">
                        <td class="text-center">'.$data['ID'].'</td>
                        <td class="txt-oflo">'.$data['income'].'</td>
                        <td class="txt-oflo">'.$data['expense'].'</td>
                        <td class="txt-oflo">'.$data['grandtotal'].'</td>
                        <td class="txt-oflo">'.$data['timestamp'].'</td>
                        <td class="txt-oflo">'.$data['userID'].'</td>
                    </tr>';
            }
            echo '</tbody>';
        }    
            
    }

    // Get income table data
    function incomeInfo($conn){
        $tabData = "SELECT * FROM income";
        $tabHead = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'xpensedb' AND TABLE_NAME = 'income'";

        $checkHead = mysqli_query($conn, $tabHead);
        $check = mysqli_query($conn, $tabData);

        if (!$checkHead){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }else{
            echo '<thead style ="position: sticky; ">
                <tr>';
            while($data = mysqli_fetch_array($checkHead)){
                echo '
                    <th class="text-center">'.$data['COLUMN_NAME'].'</th>
                ';
            }

            echo '</tr>
            </thead>';
        }

        if (!$check){
            die("ERROR: Could not able to execute $check. " . mysqli_error($conn));
        }
        else{
            echo '<tbody>';
            while($data = mysqli_fetch_array($check)){
                echo '
                    <tr class = "border ">
                        <td class="text-center">'.$data['ID'].'</td>
                        <td class="txt-oflo">'.$data['amount'].'</td>
                        <td class="txt-oflo">'.$data['category'].'</td>
                        <td class="txt-oflo">'.$data['description'].'</td>
                        <td class="txt-oflo">'.$data['timestamp'].'</td>
                        <td class="txt-oflo">'.$data['userID'].'</td>
                    </tr>';
            }
            echo '</tbody>';
        }    
            
    }

    // Remove from database
    function remove($conn, $table, $id){
        //Insert records to database
        $query = "DELETE from $table WHERE ".$table."ID = '".$id."'";
            
        // execute query
        $result = mysqli_query($conn, $query);

        // Check if query is executed
        if ($result){
            header("Location: admin.php?notice=Record has been deleted successfully!");
        }else{
            die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
        }
    }
?>