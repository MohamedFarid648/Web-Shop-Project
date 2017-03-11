<!-- 
`name`, `price`, `c_email`, `c_name`,'product_code'
-->
<?php
@session_start();
 $uploadDirectory = "uploaded/" . $_SESSION['useremail'] . "/";
/*if you didn't write in <form>enctype="multipart/form-data"'
it will say (product_image)Undefined Index
 * 
 *  */
 ?>
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
<center> 
    <div class="FormClass">
<form method="POST" action="Edit_Product.php" enctype="multipart/form-data">
    <h1> Product Name :  </h1> <input type="text" name="name" required="" value= "<?php echo $DisplaySpecialProduct['name']; ?>"><br><!-- //  ?>-->
   <h1> Price:          </h1> <input type="text" name="price" required="" value="<?php echo $DisplaySpecialProduct['price']; ?>"> <br>
  <h1> Product Description:</h1>
  <textarea name="Description" required="" value="<?php //echo $DisplaySpecialProduct['Description']; ?>">
  <?php echo $DisplaySpecialProduct['Description']; ?>
  </textarea><br> 
   <h1>Product Code: </h1><select name="product_code">
        <option value="<?php echo $DisplaySpecialProduct['product_code']; ?>"><?php echo $DisplaySpecialProduct['product_code']; ?></option>

   </select>
    <br>

   <!--  Product  Image URL: <select name="product_image_URL">
       <option value="<?php// echo $DisplaySpecialProduct['product_image']; ?>"><?php// echo $DisplaySpecialProduct['product_image']; ?></option>

    </select>
    <br>
     <!--   Product Image:<input  type="file" name="product_image[]" multiple="" required="" ><br>

-->
    <input   style="padding-left: 5px;
                             background-color: #333; border: 1px;  
                             color: #FFF; text-align: center;width:200px; height: 40px; margin-left: 30px; margin-top: 20px;"type="submit"  name="Edit" value="Edit">
</form>
   </div>
</center>

<?php
$dir = scandir($uploadDirectory);
$dirAfterDeleted = array_diff($dir, array(".", ".."));
if ($dirAfterDeleted) {
    foreach ($dirAfterDeleted as $value) {
        if ($value == $DisplaySpecialProduct['product_image']) {
            echo"<img src=$uploadDirectory$value />";
        }//end of if $value == $DisplaySpecialProduct['product_image']
    }//end of foreach
}//end of if $dirAfterDeleted
?>
<?php /*<!-- 
`name`, `price`, `c_email`, `c_name`,'product_code'
-->
<?php
@session_start();
var_dump($DisplaySpecialProduct);
 $uploadDirectory = "images/uploaded/" . $_SESSION['useremail'] . "/";
for ($index = 0; $index < count($DisplaySpecialProduct); $index++) {
    
    echo '<form method="POST" action="./controller/Edit_Product.php" enctype="multipart/form-data">
    Product Name :   <input type="text" name="name" value= "'. $DisplaySpecialProduct[$index]['name'].'"><br><!-- //  ?>-->
    Price:           <input type="text" name="price" value="'.$DisplaySpecialProduct[$index]['price'].'"> <br>
    Product Code: <select name="product_code">
        <option value="'. $DisplaySpecialProduct[$index]['product_code'].'">"'. $DisplaySpecialProduct[$index]['product_code'].'"</option>

   </select>
    <br>

    <input   style="padding-left: 5px;
                             background-color: #333; border: 1px;  
                             color: #FFF; text-align: center;width:200px; height: 40px; margin-left: 30px; margin-top: 20px;"type="submit"  name="Edit" value="Edit">
</form>';
}
 ?>



<?php
$dir = scandir($uploadDirectory);
$dirAfterDel