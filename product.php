<?php  
if(isset($_GET['page'])){
    
    

?>
<div id="LatestProject">
    <h1>Products:</h1>

    <?php
   
    $data = new Display('product');

    $DisplayAllDataVariable = $data->DisplayAllData(); //DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);  
    if ($DisplayAllDataVariable) {
       

        for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {
/*print_r($DisplayAllDataVariable[$i]);
 echo'<br>';
 echo'<br>';*/
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
                   // echo $DisplayAllDataVariable[$i]['product_code'];
                    $description=$DisplayAllDataVariable[$i]['Description'];
                    echo' Company Name:<font color="red"> <b> ' . $DisplayAllDataVariable[$i]['c_name'].'</font></b>';
                    echo'<br />Company Email:' . $DisplayAllDataVariable[$i]['c_mail'];
                    echo'<br />  Price:<font color="red"> <b>$' . $DisplayAllDataVariable[$i]['price'].'</font></b>';
                    echo'<br /> Date:' . $DisplayAllDataVariable[$i]['date'] . '<br />';
                   
                    echo"<a href='?page=ProductPage&id=".$DisplayAllDataVariable[$i]['product_code']."'>";
                    /* echo"<a href='?page=ProductPage&Company_Name=" . $DisplayAllDataVariable[$i]['c_name'] .
                    "&Company_Email=" . $DisplayAllDataVariable[$i]['c_mail'] .
                    "&Tel=" . $DisplayAllDataVariable[$i]['name'] .
                    "&Price=" . $DisplayAllDataVariable[$i]['price'] .
                    "&Date=" . $DisplayAllDataVariable[$i]['date'] .
                    "&Name=" . $DisplayAllDataVariable[$i]['name'] . 
                    "&product_image=" . $DisplayAllDataVariable[$i]['product_image'] .
                    "&product_code=".$DisplayAllDataVariable[$i]['product_code'].
                    "&Description=".$description.  
                    
                            
                            "'>";*/

                    echo $DisplayAllDataVariable[$i]['name'];
                    echo"</a>";
                    ?>
                </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no products untill now ^_^ </font>';
    }
    ?>
</div><!-- End of LatestProject -->

<?php
}
 else {
    
               header("Location:../index.php");
   

    
}
?>