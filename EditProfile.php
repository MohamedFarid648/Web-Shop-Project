<?php 
if($_POST){
    //`Name`, `Tel`, `user_email`, `user_password`

    if(isset($_POST['Edit'])){
        
            $EditProfile['Name']=$_POST['Name'];
            $EditProfile['Tel']=$_POST['Tel'];
            $EditProfile['user_password']=$_POST['user_password'];
          //  var_dump($EditProfile);
         include 'Validator.php';
        $valid = new Validator();
        try {

            $rules = array("Name" => "checkRequired|checkString",
                "Tel" => "checkRequired|checkINT",
                "user_password" => "checkRequired");

            if (!$valid->validate($_POST, $rules)) {
                die();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }


            //print_r($ADD_ADmin);
 try {
    session_start();
      
      include 'Update.php';
      $object= new Update($EditProfile, "user");
      $user_email=$_SESSION['useremail'];
      $Edit=$object->edit_data($user_email);
      
      if($Edit  == TRUE){
        
     echo '<script type="text/javascript" > alert("Editing Data successful");history.back();</script>';

      }
 else {
   echo '<script type="text/javascript" > alert("Editing Data Failed");history.back();</script>';

      }
      
      
  } 
      
   catch (Exception $exc) {
      echo $exc->getMessage();
      //echo "Error:Can not excute the query(Adding)
      //if we don't write it , it will print Exception error
  }
      
        
    }  
 
}
   else {
         if(!include 'view/viewEditProfile.php'){
                header("Location:index.php");

    }
}
?>