<?php
$uploadDirectory = "images/uploaded/" . $_SESSION['useremail'] . "/";

  
                
    if (isset($_POST['s'])) {//if write just $_POST no thing will happen  ^_^
        if (isset($_FILES)) {
            try {

                include './modols/Database.php';
                include './modols/Upload.php';
                include './modols/AddDATA.php';
                $file = $_FILES["image"];
                $legalExtention = array("png", "jpg");
                $maxSize = 2 * 1024000; //MB  I can write  4000 000 kB
                //$uploadDirectory = "images/uploaded/".$_SESSION['useremail'];

                $newFile = new Upload($file, $legalExtention, $maxSize, $uploadDirectory);

                if ($newFile->uploadMyFile()) {
                     $filenames = $newFile->getFileNames();
                    //echo $newFile->getFileUrl();
                    echo "<br>" . $uploadDirectory;
                    echo "<br>";

                    for ($i = 0; $i < count($filenames); $i++) {
                        $fileNo{$i}['file_name'] = $filenames[$i];
                        $fileNo{$i}['file_URL'] = $uploadDirectory . $filenames[$i];
                        $fileNo{$i}['user_email'] = $_SESSION['useremail'];
                        //`id`, `file_name`, `file_URL`, `date`, `user_email`
                        $addFile = new AddDATA($fileNo{$i}, "MyFiles");

                        // var_dump($fileNo{$i});
                        var_dump($filenames);
                        /* If upload 2 images: */
                        /* array(3) { ["image_name"]=> string(49) "name.jpg"
                         *  ["image_URL"]=> string(92) "images/uploaded/mohamedgalal9454@gmail.com/name.jpg" 
                         * ["mail"]=> string(26) "mohamedgalal9454@gmail.com" } 
                         *                           */
                    }

                    // var_dump($fileNo);
                    echo '<script type="text/javascript" > alert("Uploading Files successful");history.back();</script>';
                }
            }//end of try
            catch (Exception $exc) {
                echo $exc->getMessage();
            }
        }//end of isset($_FILES)
    }//end of POST






if (isset($_GET['action']) AND $_GET['action'] == 'Delete') {

    echo $fileID = $_GET['id']."<br>";

           

                //Get File URL
             include './modols/Database.php';
              include './modols/Display.php';
               $Displaydata = new Display('myfiles');
               $DisplayFileRecord = $Displaydata->DisplaySpecialFile($fileID);
               print_r($DisplayFileRecord);
            echo   $DisplayFileRecord['file_URL'];
            
            
                  //Delete File from Folder

                  try {
                  $imagesWillBeDeleted = $DisplayFileRecord['file_name'];
                  echo $imagesWillBeDeleted;
                  //  var_dump($imagesWillBeDeleted);
                  //  var_dump($_POST['check_image']);
                  include './modols/DeleteFile.php';
                  $fileDeleted = new DeleteFile($DisplayFileRecord);
                  if ($fileDeleted->deleteOneImage($imagesWillBeDeleted) == TRUE) {
                  echo '<script type="text/javascript" > alert("Deleting Data successful");history.back();</script>';

                  }
                  } catch (Exception $exc) {
                  echo $exc->getMessage();
                  } 
                  
                  
                  
               //Delete File From DB
                  
               include './modols/Delete.php';


                $Deletedata = new Delete("MyFiles", $fileID);
                 $DeleteFileRecord= $Deletedata->DeleteData();
                 
                 
              
} 


else{
    
     if(!include './view/viewControllYourImagesFromDB.php'){
                header("Location:../index.php");

    }
}
?>
