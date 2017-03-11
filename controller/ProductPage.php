<?php  
if(isset($_GET['page'])){
    
    

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Page</title>
    </head>
    <body>
        <div class="ProductPage">
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
                   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=MainPage">Back</a>

        <?php
           $data=new Display('product');
        $product_code=$_GET['id'];
        $result=$data->DisplaySpecialProduct($product_code);
        $uploadDirectory = "uploaded/" . $result['c_mail'] . "/";
            
          
                $dir = scandir($uploadDirectory);
                $dirAfterDeleted = array_diff($dir, array(".", ".."));
                if ($dirAfterDeleted) {
                    foreach ($dirAfterDeleted as $value) {
                         if ($value == $result['product_image']) {
                            $imageName= $result['name'] ;
                            echo"<img width='400' height='300' src='$uploadDirectory$value' alt='$imageName'> ";
                        }//end of if $value == $DisplayAllDataVariable[$i]['product_image']
                    }//end of foeach
                }//end of if dirAfterDeleted
                ?>
        <p style=" font-family: Verdana,Geneva,sans-serif;
    font-size: 15px;
    text-align: justify;
    color: black;">
        <?php
         
      //  print_r($result);
        
        echo '<br />Product Name: '.$result['name'].'<br />';
          echo 'Company Name: '.$result['c_name'].'<br />';
            echo 'Company Email: '.$result['c_mail'].'<br />';
              echo 'Price: $'.$result['price'].'<br />';
                echo 'Product Date: '.$result['date'].'<br />';
                echo 'Product Description: '.$result['Description'].'<br />';
        
        
        /*
        echo '<br />Product Name: '.$_GET['Name'].'<br />';
          echo 'Company Name: '.$_GET['Company_Name'].'<br />';
            echo 'Company Email: '.$_GET['Company_Email'].'<br />';
              echo 'Price: $'.$_GET['Price'].'<br />';
                echo 'Product Date: '.$_GET['Date'].'<br />';
                echo 'Product Description: '.$_GET['Description'].'<br />';
       */
        ?>
            </p>
            </div>
        
    </body>
</html>
<?php
}
 else {
    
               header("Location:../index.php");
   

    
}
?>