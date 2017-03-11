<h1 style="font-family: Verdana,Geneva,sans-serif;
    font-size: 17px;
    color: #cb0030;
    margin: 10px;">My Files:</h1>

<?php /* $txt = "W3Schools.com";
  echo "I love $txt!";
 */ ?>
<?php
$uploadDirectory = "uploaded/" . $_SESSION['useremail'] . "/";

if (isset($_POST['s'])) {//if write just $_POST no thing will happen  ^_^
    if (isset($_FILES)) {
        try {


            include 'Upload.php';
            include 'AddDATA.php';
            $file = $_FILES["image"];
            $legalExtention = array("png", "jpg");
            $maxSize = 2 * 1024000; //MB  I can write  4000 000 kB
            // $uploadDirectory = "images/uploaded/".$_SESSION['useremail'];

            $newFile = new Upload($file, $legalExtention, $maxSize, $uploadDirectory);
            if ($newFile->uploadMyFile()) {
                $filenames = $newFile->getFileNames();
                //echo $newFile->getFileUrl();
                //echo "<br>" . $uploadDirectory;
                echo "<br>";

                for ($i = 0; $i < count($filenames); $i++) {

                    $fileNo{$i}['file_name'] = $filenames[$i];
                    $fileNo{$i}['file_URL'] = $uploadDirectory . $filenames[$i];
                    $fileNo{$i}['user_email'] = $_SESSION['useremail'];
                    //`id`, `file_name`, `file_URL`, `date`, `user_email`
                    $addFile = new AddDATA($fileNo{$i}, "myfiles");

                    // var_dump($fileNo{$i});
                    /* If upload 2 images: */
                    /* array(3) { ["image_name"]=> string(49) "name.jpg"
                     *  ["image_URL"]=> string(92) "images/uploaded/mohamedgalal9454@gmail.com/name.jpg" 
                     * ["mail"]=> string(26) "mohamedgalal9454@gmail.com" } 
                     *    */
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


if (isset($_POST['Delete'])) {
    if (isset($_POST['check_image'])) {

        try {
            echo "<br>" . count($_POST['check_image']);
            $imagesWillBeDeleted = $_POST['check_image'];
            include 'DeleteFile.php';
            include 'Delete.php';
            $fileDeleted = new DeleteFile($imagesWillBeDeleted);
            $delete_image_URL = $fileDeleted->SelectImageURL();

            if ($_SESSION['user_type'] == 'Company') {

                for ($index = 0; $index < count($delete_image_URL); $index++) {
                    //  echo "<br>".$delete_image_URL[$index]."<br>";
                    $num_of_char_in_UserEmail = stripos($_SESSION['useremail'] . "/", "/") . "<br>";
                    $num_of_char_in_ImagesUploaded = 16; // "images/uploaded/" 
                    //$num_of_char_in_ImagesUploaded=stripos($delete_image_URL[$index], $_SESSION['useremail'] . "/");
                    $num_of_char_ToStartImageURL = $num_of_char_in_UserEmail + $num_of_char_in_ImagesUploaded + 1;
                    $ImageURLThatWillBeDeleted = substr($delete_image_URL[$index], $num_of_char_ToStartImageURL);
                    $DeleteData = new Delete("product", 1);
                    $d = $DeleteData->DeleteImageURL($ImageURLThatWillBeDeleted);
                     if ($d) {
                    echo "<br>Deleting Product Successful From DB";
                }
                    
                }//for loop
                
            }//if usertype=Company


            $delete_image = $fileDeleted->deleteImage();
            if ($delete_image == TRUE) {
                echo '<script type="text/javascript" > alert("Deleting Data successful");history.back();</script>';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } else {
        echo '<script type="text/javascript" > alert("Please Select Items  ^_^");history.back();</script>';
    }
} else {
       if(!include 'view/Libraries.php'){
                header("Location:index.php");

    }
}
?> 
<div id="LatestProject">
    <h1>Images:</h1>





<?php
$dir = scandir($uploadDirectory);
//var_dump($dir);
$dirAfterDeleted = array_diff($dir, array(".", ".."));
//var_dump($dir);
//var_dump($dirAfterDeleted);
if ($dirAfterDeleted) {

    echo '<form method="POST">';

    foreach ($dirAfterDeleted as $value) {
        ?>
            <div class="Project">
            <?php
            echo "<img src='$uploadDirectory$value'> ";
            echo "<input type = 'checkbox' name='check_image[]' class='checkbox' value='$uploadDirectory$value'>";
            ?>
            </div>
            <?php
        }


        echo '<br>';
        echo '<br>';
        // echo'<div id="loginhtml"';
        echo '<center><input  style="
            float:left;
                            padding-left: 5px;
                             background-color: #333; border: 1px;  
                             color: #FFF; text-align: center;width:200px; height: 40px; margin-right:60px; margin-left:60px; margin-top: 100px;" type="submit" value="Delete" name="Delete"></center>';
//echo'</div>';
        echo '</form>';
    } else {
        echo'<h1>You have not any files until now  ^_^  </h1>';
    }
    ?>
</div>

