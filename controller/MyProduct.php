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

$uploadDirectory = "images/uploaded/" . $DisplayAllDataVariable[$i]['company_email']. "/";            ?>
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

  echo"<a href='?page=Delete_Product&action=Delete_Customer_Product&product_code={$DisplayAllDataVariable[$i]['product_code']}&id={$DisplayAllDataVariable[$i]['id']}'>Delete</a><br>";

                    

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


            
  
      <?php /*
//echo'hhhhhhhhhhhhh';
      // include './modols/DBClass.php';
    //(`product_code`, `customer_email`, `product_name`, `company_name`, `company_email`, `price`                                $ADD_Product['product_name']=$_GET['name'];
      include './modols/Database.php';
      include './modols/Display.php';
      
      $data= new Display('customer_product');
      
      $DisplayAllDataVariable= $data->DisplayCustomerProducts($_SESSION['useremail']);//DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);  
      //print_r($DisplayAllDataVariable);
      if($DisplayAllDataVariable){
          //                 <table border="2"  style="width: 10%; height: 40%;" >

          echo' 
                 <table border = "1" width="50%" cellspacing="10" cellpadding="10">

<tr>
        
        
        <th>Product code</th>
        <th>Product Name:</th>
        <th>Company Name: </th>
        <th>Company Email:</th>
        <th>Price</th>
          <th>Action</th>
    </tr>
';
             for($i=0;$i<count($DisplayAllDataVariable);$i++){
                 
                 echo " <tr>
        <td>  {$DisplayAllDataVariable[$i]['product_code']}</td>
        <td>{$DisplayAllDataVariable[$i]['product_name']}</td>
        <td>{$DisplayAllDataVariable[$i]['company_name']}</td>
                  <td>{$DisplayAllDataVariable[$i]['company_email']}</td>

        <td>{$DisplayAllDataVariable[$i]['price']}</td>
   <td> <a href='?page=Delete_Product&action=Delete_Customer_Product&product_code={$DisplayAllDataVariable[$i]['product_code']}&id={$DisplayAllDataVariable[$i]['id']}'>Delete</a><br>

        
    </tr>
    
";
             }
      echo '    </table></h1>';}
 else {
    echo '<font color="blue">You do not Buy any product until now ^_^ </font>';
    
}

          */   ?>
  

