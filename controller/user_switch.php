
<?php

//session_start();
if($_SESSION['user_type']=='Admin'){
    
    include './view/Admin.php';
}
 else if ($_SESSION['user_type'] == 'Customer') {
    include './view/Customer.php';
} else if ($_SESSION['user_type'] == 'Company'){
    include'./view/Company.php';
}
 else {
    echo 'Error in user_switch.php';
                header("Location:../index.php");

    
}



