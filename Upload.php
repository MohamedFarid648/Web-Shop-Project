<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author galal
 */
class Upload {

    private $file; //ex:$file=$_FILES["image"];
    private $legalExtention; //ex: = array("png", "doc", "docx", "pdf", "jpg", "txt", "jpeg");
    private $maxSize; //ex: =1024000 * 2
    private $uploadDirectory; //ex:  =$destination = "uploaded/"
    private $fileURL; //ex:  =$random . "_" . date("d-m-y") . "_" . $fileName;
    private $fileNames=array();
    //="290_28-07-15_1"


function __construct($file, $legalExtention, $maxSize, $uploadDirectory) {
    if (is_array($legalExtention) AND is_int($maxSize)) {
        $this->file = $file;
        $this->legalExtention = $legalExtention;
        $this->maxSize = $maxSize;
        $this->uploadDirectory = $uploadDirectory;
    } else {
        throw new Exception("Legal Extentions must be an array<br>Max size of your file must be an integer  ^_^");
    }
    // $this->connect();
}

function uploadMyFile() {

    $file = $this->file;
    $legalExtention = $this->legalExtention;
    $maxSize = $this->maxSize;
    $uploadDirectory = $this->uploadDirectory;

    //1.
   

    //2.
    // print_r($_FILES);
    for ($i = 0; $i < count($file['name']); $i++) {
         $errors = array();
        $fileName = $file['name'][$i];
        // $files['name'][$i]==$_FILES['image']['name'][$i];
        // $fileExtention= end( explode(".", $fileName));//print (png)
        $fileExtention = strtolower(end(explode(".", $fileName)));
        // echo $fileExtention;
        $fileSize = $file['size'][$i];
        $fileTempName = $file['tmp_name'][$i];

        //3.
        //A.
        if (in_array($fileExtention, $legalExtention) === FALSE) {

            $errors[] = "Youe Extenstion is not allowed  ^_^";
        }
        //B.
        if ($fileSize > $maxSize) {//1024000*2=2048000Kb=2Mb
            $errors[] = "Your size greater than {$maxSize} Mb,File Size must be less than {$maxSize} Mb";
        }

        # C.
        if (empty($errors)) {
             $random = rand(0, 1000);
            $this->fileURL = $random . "_" . date("d-m-y") . "_" . $fileName; //="290_28-07-15_1"
           
            $destination = $uploadDirectory . $random . "_" . date("d-m-y") . "_" . $fileName;
            /* Note:
              if just write ($destination="images/uploaded/")
              this error will appear:
              The second argument to copy() function cannot be a directory
             * why?
             * it's because your moving a file and it thinks your trying
              to rename that file to the second parameter (in this case a director).
             */
  
         try {
move_uploaded_file($fileTempName, $destination);

} catch (Exception $exc) {
   throw new Exception("Files not uploaded");
        echo $exc->getMessage();

}
            $this->fileNames[]=$this->fileURL;

        }//end of   if (empty($errors))
        else {

            foreach ($errors as $value) {
               throw new Exception($value);
                // echo $value . "<br>";
            }
        }
    } //end of for loop 

                    return TRUE;

            }
   

            /*
            function uploadMyProductImage() {

    $file = $this->file;
    $legalExtention = $this->legalExtention;
    $maxSize = $this->maxSize;
    $uploadDirectory = $this->uploadDirectory;

    //1.
   

    //2.
    // print_r($_FILES);
    for ($i = 0; $i < count($file['name']); $i++) {
         $errors = array();
        $fileName = $file['name'][$i];
        // $files['name'][$i]==$_FILES['image']['name'][$i];
        // $fileExtention= end( explode(".", $fileName));//print (png)
        $fileExtention = strtolower(end(explode(".", $fileName)));
        // echo $fileExtention;
        $fileSize = $file['size'][$i];
        $fileTempName = $file['tmp_name'][$i];

        //3.
        //A.
        if (in_array($fileExtention, $legalExtention) === FALSE) {

            $errors[] = "Youe Extenstion is not allowed  ^_^";
        }
        //B.
        if ($fileSize > $maxSize) {//1024000*2=2048000Kb=2Mb
            $errors[] = "Your size greater than {$maxSize} Mb,File Size must be less than {$maxSize} Mb";
        }

        # C.
        if (empty($errors)) {
             $random = rand(0, 1000);
            $this->fileURL = $random . "_" . date("d-m-y") . "_" . $fileName; //="290_28-07-15_1"
           
            $destination = $uploadDirectory . $random . "_" . date("d-m-y") . "_" . $fileName;
            /* Note:
              if just write ($destination="images/uploaded/")
              this error will appear:
              The second argument to copy() function cannot be a directory
             * why?
             * it's because your moving a file and it thinks your trying
              to rename that file to the second parameter (in this case a director).
           */
            /*
            move_uploaded_file($fileTempName, $destination);
            $this->fileNames[]=$this->fileURL;

        }//end of   if (empty($errors))
        else {

            foreach ($errors as $value) {
               throw new Exception($value);
                // echo $value . "<br>";
            }
        }
    } //end of for loop 

                    return TRUE;

            }
          */  
            function getFileUrl(){
                
              return   $this->fileURL;
            }
             function getFileNames(){
                
              return   $this->fileNames;
            }

    

/*
 

        //1.
        $legalExtention = array("png", "doc", "docx", "pdf", "jpg", "txt", "jpeg");
        $errors = array();


        //2.
        // print_r($_FILES);
        $files = $_FILES["image"];
        for ($i = 0; $i < count($files['name']); $i++) {
            $fileName = $files['name'][$i];
            // $files['name'][$i]==$_FILES['image']['name'][$i];
            // $fileExtention= end( explode(".", $fileName));//print (png)
            $fileExtention = strtolower(end(explode(".", $fileName)));
            // echo $fileExtention;
            $fileSize = $files['size'][$i];
            $fileTempName = $files['tmp_name'][$i];

            //3.
            //A.
            if (in_array($fileExtention, $legalExtention) === FALSE) {

                $errors[] = "Youe Extenstion is not allowed  ^_^";
            }
            //B.
            if ($fileSize > (1024000 * 2)) {//1024000*2=2048000Kb=2Mb
                $errors[] = "Your size greater than 2Mb,File Size must be less than 2Mb";
            }

            # C.
            if (empty($errors)) {
                $random = rand(0, 1000);
                $destination = "images/uploaded/" . $random . "_" . date("d-m-y") . "_" . $fileName;
                /* Note:
                  if just write ($destination="images/uploaded/")
                  this error will appear:
                  The second argument to copy() function cannot be a directory
                 * why?
                 * it's because your moving a file and it thinks your trying
                  to rename that file to the second parameter (in this case a director).

                 
                if (move_uploaded_file($fileTempName, $destination)) {
                    echo 'file uploaded';
                } else {
                    echo 'file not  uploaded';
                }
            }//end of   if (empty($errors))
            else {

                foreach ($errors as $value) {
                    echo $value . "<br>";
                }
            }
        } //end of for loop 
    }// end of if (isset($_FILES)) */
            
}