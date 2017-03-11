<?php

if ($_POST) {
    session_start();
    $uploadDirectory = "uploaded/" . $_SESSION['useremail'] . "/";
    /* if you write:images/uplo... not ../images/uploaded... 
      it will say unable to move from te */

    $ADD_Product['product_image'] = "";
    if (isset($_POST['ADD'])) {//if write just $_POST no thing will happen  ^_^
        if (isset($_FILES)) {
            try {


                include 'Upload.php';

                $file = $_FILES["product_image"];
                $legalExtention = array("png", "jpg");
                $maxSize = 2 * 1024000; //MB  I can write  4000 000 kB
                // $uploadDirectory = "images/uploaded/".$_SESSION['useremail'];
                // var_dump($file['name']);
                if (count($file['name']) == 1) {

                    $newFile = new Upload($file, $legalExtention, $maxSize, $uploadDirectory);
                     $newFile->uploadMyFile();
                    $ADD_Product['product_image'] = $newFile->getFileUrl();
                    echo'<br>'; //  var_dump($file);
                } else {

                    echo '<script type="text/javascript" > alert("Please Chosse Just One Image for the Product  ^_^");history.back();</script>';
                    exit();
                }
            }//end of try
            catch (Exception $exc) {
                echo $exc->getMessage();
            }
        }//end of isset($_FILES)
        else {
            // $ADD_Product["product_image"] = "No image Here";
        }
        //`name`, `price`, `c_mail`, `c_name`,'product_code'

        $ADD_Product['name'] = $_POST['name'];
        $ADD_Product['price'] = $_POST['price'];
          $ADD_Product['Description'] = $_POST['Description'];
        $ADD_Product['c_mail'] = $_SESSION['useremail'];
        $ADD_Product['c_name'] = $_SESSION['user_name'];
        $ADD_Product['product_code'] = $_POST['product_code'];
        echo'<br>';

        //  var_dump($ADD_Product);

        include 'Validator.php';
        $valid = new Validator();
        try {

            $rules = array("name" => "checkRequired|checkString",
                "price" => "checkRequired|checkFloat",
                "product_code" => "checkRequired|checkINT"
            );

            if (!$valid->validate($ADD_Product, $rules)) {
                die();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }

        try {
            include 'AddDATA.php';

             $Add = new AddDATA($ADD_Product, 'product');
            if ($Add == TRUE) {

                echo '<script type="text/javascript" >alert("Adding Data successful");history.back();</script>';
                }/*
              else{
              echo '<script type="text/javascript" > alert("Error Mesage:please try again<br>may be your price is wrong");history.back();</script>';

              } */
        } catch (Exception $exc) {
            unlink($uploadDirectory . $newFile->getFileUrl());
            echo '<script type="text/javascript" > alert("Error Mesage:please try again,may be your product code is already exist ");history.back();</script>';
           // exit();
//echo "Error:Can not excute the query(Adding)
            //if we don't write it , it will print Exception error
            // $exc->getMessage();
        }
    }//if post['add']
}//if post 
else {

    if(!include 'view/viewAddProduct.php'){
                header("Location:index.php");

    }
}
?>