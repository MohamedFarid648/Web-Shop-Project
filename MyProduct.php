    <?php  
if(isset($_GET['page'])){
    
    

?>
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
                   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
<div id="LatestProject">

    <h1>My Products:</h1>

    <?php
  
    //(`product_code`, `customer_email`, `product_name`, `company_name`, `company_email`, `price`                                $ADD_Product['product_name']=$_GET['name'];

      
      $data= new Display('customer_product');
      
      $DisplayAllDataVariable= $data->DisplayCustomerProducts($_SESSION['useremail']);//DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);  
      
if($DisplayAllDataVariable){
        for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {

$uploadDirectory = "uploaded/" . $DisplayAllDataVariable[$i]['company_email']. "/";            ?>
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
             
                  
            echo' Product code:'.$DisplayAllDataVariable[$i]['product_code']."<br>";
echo' Company Name: '.$DisplayAllDataVariable[$i]['company_name']."<br>";
echo'Company Email:'.$DisplayAllDataVariable[$i]['company_email']."<br>";
echo'Product Name:<font color="red"> '.$DisplayAllDataVariable[$i]['product_name']."</font><br>";
echo'  Price:<font color="red">$'.$DisplayAllDataVariable[$i]['price']."</font><br>";
echo'  Date:'.$DisplayAllDataVariable[$i]['date']."<br>";
echo'  Recieving Date:<font color="red">'.$DisplayAllDataVariable[$i]['RecievingDate']."</font><br>";
$str=trim($DisplayAllDataVariable[$i]['RecievingDate']);
//echo "Date Before:".$DisplayAllDataVariable[$i]['RecievingDate']."<br>Date after deleting space,...:".$str."<br>";
   //echo"RM";
   $RecievingDateYear=$str[0].$str[1].$str[2].$str[3];
   $RecievingDateMonth=$str[5].$str[6];
   $RecievingDateDay=$str[8].$str[9];
   $currentDay= date("d");
   $currentMonth=date("m");
   $currentYear=date("Y");
$subDay=$RecievingDateDay-$currentDay;//intval() or floatval():
$subMon=$RecievingDateMonth-$currentMonth;
$subYear=$RecievingDateYear-$currentYear;
  /* echo "RY:". $RecievingDateYear."<br>RM:".$RecievingDateMonth."<br>RD:".$RecievingDateDay."<br>";
   echo "CY:".$currentYear ."<br>CM:".$currentMonth."<br>CD:".$currentDay."<br>";
   echo "SY:".$subYear."<br>SM:".$subMon."<br>SD:".$subDay."<br>";
*/

if($RecievingDateYear==$currentYear){
    if($RecievingDateMonth == $currentMonth){
 
    if( $subDay >= 2){

                echo"<a href='?page=Delete_Product&action=Delete_Customer_Product&product_code={$DisplayAllDataVariable[$i]['product_code']}&id={$DisplayAllDataVariable[$i]['id']}'>Delete</a><br>";

    }
    else{
        
        echo"you can't delete your product,call your company please ";
    }
  
}//end of if reiciving data is equal to current or not
else if($RecievingDateMonth > $currentMonth){
                    echo"<a href='?page=Delete_Product&action=Delete_Customer_Product&product_code={$DisplayAllDataVariable[$i]['product_code']}&id={$DisplayAllDataVariable[$i]['id']}'>Delete</a><br>";
                    }
else if($RecievingDateMonth < $currentMonth){        echo"you can't delete your product,call your company please ";}
    
}//end of year=year

else if($RecievingDateYear > $currentYear){
                    echo"<a href='?page=Delete_Product&action=Delete_Customer_Product&product_code={$DisplayAllDataVariable[$i]['product_code']}&id={$DisplayAllDataVariable[$i]['id']}'>Delete</a><br>";

}
else if($RecievingDateYear < $currentYear){
            echo"you can't delete your product,call your company please ";

}


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
    
               header("Location:index.php");
   

    
}
?>


            
  