

<html>
<head><title>
<?php 

  if (isset($_SESSION['useremail'])) {echo $_SESSION['useremail'] ;}
?>
</title></head>
<body>
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
    echo 'Session may be  Destroyed please login again ^_^ ';
                header("Location:index.php");

    
}



?>
</body>
</html>