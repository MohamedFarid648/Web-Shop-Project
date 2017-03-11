<?php

if ($_POST) {
    //`Name`, `Tel`, `user_email`, `user_password`

    if (isset($_POST['ADD'])) {
        $ADD_ADmin['Name'] = $_POST['Name'];
        $ADD_ADmin['user_password'] = $_POST['user_password'];
        $ADD_ADmin['user_email'] = $_POST['user_email'];
        $ADD_ADmin['Tel'] = $_POST['Tel'];
        $ADD_ADmin['usertype'] = $_POST['usertype'];
   include '../modols/Validator.php';
        $valid = new Validator();
        try {

            $rules = array("Name" => "checkRequired|checkString",
                "user_email" => "checkRequired|checkEmail",
                "Tel" => "checkRequired|checkINT",
                "user_password" => "checkRequired");

            if (!$valid->validate($_POST, $rules)) {
                die();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }
       // print_r($ADD_ADmin);
        try {
           
            include '../modols/AddDATA.php';
            
            $Add = new AddDATA($ADD_ADmin, 'user');

            if ($Add == TRUE) {
              
          $folderPath="../images/uploaded/".$_POST['user_email'];
          /*No such file or directory (if you write: 
           * images/uploaded/".$_POST['user_email'];)
           * without:../
                     */
           mkdir("$folderPath");
                //echo $folderPath;
                echo '<script type="text/javascript" > alert("Adding Data successful");history.back();</script>';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            //echo "Error:Can not excute the query(Adding)
            //if we don't write it , it will print Exception error
        }
    }
} else {
     if(!include './view/viewAddAdmin.php'){
        header("Location:../index.php");

        
        
        
    }
}
?>