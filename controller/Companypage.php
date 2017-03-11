<?php  
if(isset($_GET['page'])){
    
    

?>
<h1 style="font-family: Verdana,Geneva,sans-serif;
    font-size: 17px;
    color: #cb0030;
    margin-bottom:5px;">Company Name:</h1>
<a style="float: right;text-decoration: none; 
    color: #592c5f; margin-right:30px;" href="?page=MyCompanies">Back</a>
<?php
//echo $_GET['id'];
echo '<h2><font style="color:red;">' . $_GET['Name'] . '</font></h2><hr><br>';
$user_email = $_GET['user_email'];
echo'<h1 style="font-family: Verdana,Geneva,sans-serif;
    font-size: 17px;
    color: #cb0030;
    margin-bottom: 20px;">Email:</h1><h2>
    
<a href="mailto: "'.$user_email.'" style="right;text-decoration: none;color: red;" >


' . $user_email . '</a></h2><hr><br>';

$user_tel = $_GET['Tel'];
echo'<h1 style="font-family: Verdana,Geneva,sans-serif;
    font-size: 17px;
    color: #cb0030;
    margin-bottom: 20px;">Tel:</h1><h2><font style="color:red;">' . $user_tel . '</font></h2><hr><br>';


?>
<div id="LatestProject">
<h1>Images:</h1>
    
    



    <?php
    $uploadDirectory = "uploaded/" . $user_email . "/";

$dir = scandir($uploadDirectory);
//var_dump($dir);
$dirAfterDeleted = array_diff($dir, array(".", ".."));
//var_dump($dir);
//var_dump($dirAfterDeleted);
if ($dirAfterDeleted) {


    foreach ($dirAfterDeleted as $value) {


?>
    <div class="Project">
        <?php

        echo "<img   src='$uploadDirectory$value'> ";
    ?>
        </div>
<?php    
}
   
}

    ?>

</div>
<br />
<hr style="color: green; clear: both;">
<div id="LatestProject">
    <h1>Products:</h1>

    <?php
$c_mail = $user_email;
$data = new Display('product');
$DisplayAllDataVariable = $data->DisplayAllProductByCompanyEmail($c_mail);
// print_r($DisplayAllDataVariable); if ($DisplayAllDataVariable) {

if($DisplayAllDataVariable){
        for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {

            $uploadDirectory = "uploaded/" . $DisplayAllDataVariable[$i]['c_mail'] . "/";
            ?>
            <div class="Project">
                <?php
                $dir = scandir($uploadDirectory);
                $dirAfterDeleted = array_diff($dir, array(".", ".."));
                if ($dirAfterDeleted) {
                    foreach ($dirAfterDeleted as $value) {
                         if ($value == $DisplayAllDataVariable[$i]['product_image']) {
                            $imageName= $DisplayAllDataVariable[$i]['name'] ;
                            echo"<img width='140' height='100' src='$uploadDirectory$value' alt='$imageName'> ";
                        }//end of if $value == $DisplayAllDataVariable[$i]['product_image']
                    }//end of foeach
                }//end of if dirAfterDeleted
                ?>
                <h2>
                    <?php
                    ?></h2>

                <p>
                     <?php
                    echo'<br />  Price:<font color="red"> <b>$' . $DisplayAllDataVariable[$i]['price'].'</font></b>';
                    echo'<br /> Date:' . $DisplayAllDataVariable[$i]['date'] . '<br />';
                   echo"<br /><a href='?page=ProductPage".
                            "&id=" . $DisplayAllDataVariable[$i]['product_code'] .
                           
                            "'>";

                    echo $DisplayAllDataVariable[$i]['name'];
                    echo"</a>";
                    ?>
                </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no product untill now ^_^ </font>';
    }
    ?>



</div><!-- End of LatestProject -->

<?php
}
 else {
    
               header("Location:../index.php");
   

    
}
?>

