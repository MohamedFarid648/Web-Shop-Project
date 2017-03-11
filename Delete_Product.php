<?php  
if(isset($_GET['page'])){
    
    

?>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'Delete_Customer_Product') {

    //why we write isset()?
    //isset($_GET['action']): check if get[actin] exist or not
    //$_GET['action']=='delete' :check the value of this Get['action'] equals 'delete' or not

    try {
        // include './modols/DBClass.php';
        
        include 'Delete.php';
        $product_code = $_GET['product_code'];
        $id = $_GET['id'];
      //  echo "id:" . $id . "<br> code:" . $product_code . "<br>";
        $DeleteData = new Delete("customer_product", $id);
        $d = $DeleteData->DeleteCustomerProductData($_SESSION['useremail'], $product_code);
        if ($d) {
            echo '<script type="text/javascript" > alert("Deleting Data successful");history.back();</script>';
        }
    } 
    
    catch (Exception $exc) {
        echo $exc->getMessage();
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'delete') {

    //why we write isset()?
    //isset($_GET['action']): check if get[actin] exist or not
    //$_GET['action']=='delete' :check the value of this Get['action'] equals 'delete' or not

    try {
        // include './modols/DBClass.php';
       
        @session_start();
 $uploadDirectory = "uploaded/" . $_SESSION['useremail'] . "/";
       
        include 'Delete.php';
        $id = $_GET['id'];
         $imageURL=$_GET['product_image'];
    if( unlink($uploadDirectory.$imageURL))
    { 
      // echo 'Deleted Image: <br>'.$uploadDirectory.$imageURL.'<br>Successfull ';
        
    }
       // echo "<br>ID:".$id;
       $DeleteDataCustomerProduc = new Delete("customer_product", $id);
       $dDeleteDataCustomerProduc = $DeleteDataCustomerProduc->DeleteProductData();
       
       $DeleteData = new Delete("product", $id);
       $d = $DeleteData->DeleteProductData();
      if ($d) {
           echo '<script type="text/javascript" > alert("Deleting Data successful");history.back();</script>';
       }
    } catch (Exception $exc) {
        //echo $exc->getMessage();
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'Edit') {
    $id = $_GET['id'];
     //$imageURL=$_GET['product_image'];
   // echo "Product code is : " . $id;
   // echo "Product URL is : " . $imageURL;
    
    $data = new Display('product');
    //  $DisplaySpecialProduct=$data->DisplayLastData($id);//$data->DisplaySpecialProduct($id);
    $DisplaySpecialProduct = $data->DisplaySpecialProduct($id); //$data->DisplaySpecialProduct($id);
 //print_r($DisplaySpecialProduct);
    // print_r($data->DisplaySpecialProduct($id));
    //  echo '<br><br><br>';
      if(!include 'view/viewUpdateProduct.php'){
                header("Location:index.php");

    }
}
?>
<?php
}
 else {
    
               header("Location:index.php");
   

    
}
?>

