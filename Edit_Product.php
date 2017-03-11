<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($_POST) {
    @session_start();
    $uploadDirectory = "uploaded/" . $_SESSION['useremail'] . "/";
    /* if you write:images/uplo... not ../images/uploaded... 
      it will say unable to move from te */

//$Edit_Product['product_image']="";
    if (isset($_POST['Edit'])) {//if write just $_POST no thing will happen  ^_^
        /*
          /*    if (isset($_FILES)) {
          try {
          // var_dump($_POST);
          echo'<br>';

          echo'<br>';

          include 'Upload.php';

          $file = $_FILES["product_image"];
          $legalExtention = array("png", "jpg");
          $maxSize = 2 * 1024000; //MB  I can write  4000 000 kB
          //var_dump($file);
          $newFile = new Upload($file, $legalExtention, $maxSize, $uploadDirectory);
          $newFile->uploadMyFile() ;
          $Edit_Product['product_image']=$newFile->getFileUrl();
          echo'<br>';
          }//end of try
          catch (Exception $exc) {
          echo $exc->getMessage();
          }
          }//end of isset($_FILES)
          else{
          // $Edit_Product["product_image"] = "No image Here";
          } */
        
//`name`, `price`, `c_mail`, `c_name`,'product_code','Description'
        $Edit_Product['name'] = $_POST['name'];
        $Edit_Product['price'] = $_POST['price'];
        $Edit_Product['Description'] = $_POST['Description'];
        include 'Validator.php';
        $valid = new Validator();
        try {

            $rules = array("name" => "checkRequired|checkString",
                "price" => "checkRequired|checkFloat");

            if (!$valid->validate($_POST, $rules)) {
                die();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }

        //  var_dump($Edit_Product);
        try {
            include 'Update.php';
            $object = new Update($Edit_Product, "product");
            $id = $_POST['product_code'];
            $Edit = $object->edit_product_data($id);
            if ($Edit == TRUE) {
                /* $imageURL=$_POST['product_image_URL'];
                  echo "<br>".$uploadDirectory.$imageURL;
                  //unlink($uploadDirectory.$imageURL); */
                echo '<script type="text/javascript" > alert("Editing Data successful");history.back();</script>';
            } else {
                echo '<script type="text/javascript" > alert("Editing Data Failed");history.back();</script>';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            //echo "Error:Can not excute the query(Adding)
            //if we don't write it , it will print Exception error
        }
    }//end of isset(post=edit)
}//end of POST


 else {
               header("Location:index.php");

}

