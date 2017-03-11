<?php
if(isset($_POST['UpdateRecievingDate'])){
    //`product_code`,
    // `product_image`, `customer_email`,
    //  `product_name`, `company_name`, 
    //  `company_email`, `price`, `date`, 
    //  `RecievingDate`, `id
   $editDate['RecievingDate']=$_POST['RecievingDate'];
    $editDate['date']= $_POST['date'];
     $id=$editDate['id']=$_POST['id'];
   $customer_email=$editDate['customer_email']=$_POST['customer_email'];
  $company_email= $editDate['company_email']=$_POST['company_email'];
  include '../modols/Validator.php';
        $valid = new Validator();
        try {

            $rules = array("RecievingDate" => "checkRequired");

            if (!$valid->validate($_POST, $rules)) {
                die();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }

  
     //var_dump($editDate);
   try {
     
      include '../modols/Update.php';
      $object= new Update($editDate, "customer_product");
           $Edit=$object->edit_recieving_date($company_email, $customer_email, $id);  
      if($Edit  == TRUE){
        
        echo '<script type="text/javascript" > alert("Editing Data successful");history.back();</script>';

      }
 else {
  // echo '<script type="text/javascript" > alert("Editing Data Failed");history.back();</script>';

      }
   } catch (Exception $exc) {
       echo $exc->getMessage();
   }

    
}

 else {
    
               header("Location:../index.php");
   

    
}
