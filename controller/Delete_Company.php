<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (isset($_GET['action']) && $_GET['action'] == 'delete') {
$DeleteFolder;
    //why we write isset()?
    //isset($_GET['action']): check if get[actin] exist or not
    //$_GET['action']=='delete' :check the value of this Get['action'] equals 'delete' or not

    try {
        // include './modols/DBClass.php';
        
        include './modols/Delete.php';
        $id = $_GET['id'];
        $folderPath = "./images/uploaded/" . $_GET['user_email'] . "/";
      
        if($ArrayOfImages= scandir($folderPath)){
//find all images in this path
        //but these images has(".","..") so we must delete it 
        $folderPathAfterDeleted = array_diff($ArrayOfImages, array(".", ".."));

        foreach ($folderPathAfterDeleted as $file) {
            // var_dump($file);
            unlink($folderPath . $file);
            //if unlink($file) he  can see the image  but hasn't it's full path
        }
        
        
        $DeleteFolder = rmdir($folderPath);
        }
 else {
                echo '<script type="text/javascript" > alert("There is no folders for this users ^_^");history.back();</script>';
     
     
 }
        //echo $folderPath;
        if ($DeleteFolder) {
            $DeleteData = new Delete("user", $id);
            $d = $DeleteData->DeleteData();
            if ($d) {
                // echo $folderPath;
                echo '<script type="text/javascript" > alert("Deleting Data successful");history.back();</script>';
            }
        }
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
} else {
      if(!include './view/Admin.php'){
                header("Location:../index.php");

    }
}
?>
