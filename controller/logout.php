
<?php
if($_POST){
if(isset($_POST['logout'])){

session_start();//If you remove it he will destroy unexisting session
session_destroy();
header('Location:../index.php'); //روح على ااندكس
}
}
 else {
    
             header("Location:../index.php");
   

    
}
?>
