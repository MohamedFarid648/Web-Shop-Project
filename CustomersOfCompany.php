<?php  
if(isset($_GET['page'])){
    
    

?>
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
<div id="LatestProject">
    <h1>Customers:</h1>

    <?php
        //(`product_code`, `customer_email`, `product_name`, `company_name`, `company_email`, `price`                                $ADD_Product['product_name']=$_GET['name'];

$data = new Display('customer_product');

$DisplayAllDataVariable = $data->DisplayCustomersOfSpecialCompany($_SESSION['useremail']);
    // print_r($DisplayAllDataVariable); if ($DisplayAllDataVariable) {

if($DisplayAllDataVariable){
        for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {

$uploadDirectory = "uploaded/" . $_SESSION['useremail'] . "/";            ?>
            <div class="Project">
                <?php
                $dir = scandir($uploadDirectory);
                $dirAfterDeleted = array_diff($dir, array(".", ".."));
                if ($dirAfterDeleted) {
                    foreach ($dirAfterDeleted as $value) {
                         if ($value == $DisplayAllDataVariable[$i]['product_image']) {
                            $imageName= $DisplayAllDataVariable[$i]['product_name'] ;
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
             
            echo'<br />Customer Email:<font color="red"><b>' . $DisplayAllDataVariable[$i]['customer_email'].'</font></b>' ;
            echo'<br />Product Name:' . $DisplayAllDataVariable[$i]['product_name'] ;
           
                    echo'<br />  Price:<font color="red"> <b>$' . $DisplayAllDataVariable[$i]['price'].'</font></b>';
                    echo'<br /> Date:' . $DisplayAllDataVariable[$i]['date'] . '<br />';
                     echo'  Recieving Date:' . $DisplayAllDataVariable[$i]['RecievingDate'] . "<br>";
            echo' <form  action ="UpdateRecievingCustomerDate.php" method="POST">
                                    <input type="text" name="RecievingDate" required="" value="ex: '.date("Y/m/d h:i:sa").'" placeholder="">
                      <input type="hidden" name="date" value="' . $DisplayAllDataVariable[$i]['date'] . '" readonly="readonly" />
                      <input type="hidden" name="customer_email" value="' . $DisplayAllDataVariable[$i]['customer_email'] . '" readonly="readonly" />
                       <input type="hidden" name="company_email" value="' . $DisplayAllDataVariable[$i]['company_email'] . '" readonly="readonly"/>
                        <input type="hidden" name="id" value="' . $DisplayAllDataVariable[$i]['id'] . '" readonly="readonly" />
       <input style="float:right;" type="submit" value="UpdateRecievingDate" name="UpdateRecievingDate" />
   </form>';
                    //echo date("Y/m/d") -$DisplayAllDataVariable[$i]['date'];

                    ?>
                </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no Customers for you  untill now ^_^ </font>';
    }

?>


</div><!-- End of LatestProject -->

<?php
}
 else {
    
               header("Location:index.php");
   

    
}
?>

