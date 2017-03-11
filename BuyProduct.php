<?php 

if(isset($_GET['action'])&&$_GET['action']=='Buy'){
//INSERT INTO `customer_product`(`product_code`, `customer_email`, `product_name`, `company_name`, `company_email`, `price`                                $ADD_Product['product_name']=$_GET['name'];
                                $ADD_Product['price']=$_GET['price'];
                                $ADD_Product['customer_email']=$_SESSION['useremail'];
                                $ADD_Product['company_email']=$_GET['c_mail'];
                                $ADD_Product['company_name']=$_GET['c_name'];
                                $ADD_Product['product_code']=$_GET['product_code'];
                                 $ADD_Product['product_name']=$_GET['name'];
                                  $ADD_Product['product_image']=$_GET['product_image'];
                                
                                
                                
//print_r($ADD_ADmin);
 try {
    //  include '../modols/DBClass.php';
     //  include './modols/Database.php';
      include 'AddDATA.php';
      $Add= new AddDATA($ADD_Product,'customer_product');
      if($Add  == TRUE){
        
          echo '<script type="text/javascript" > alert("Adding Data successful");history.back();</script>';

      }
 else {
                   echo '<script type="text/javascript" > alert("Error Mesage:please try again<br>may be your price is wrong");history.back();</script>';

      }
      
      
  } 
      
   catch (Exception $exc) {
      echo $exc->getMessage();
      //echo "Error:Can not excute the query(Adding)
      //if we don't write it , it will print Exception error
  }
}

else {
    if(!include 'view/ViewAllProductForCustomer.php'){
        header("Location:index.php");

        
        
        
    }
    
    
}
?>