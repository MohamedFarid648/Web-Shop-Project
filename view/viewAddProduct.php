<!-- 
`name`, `price`, `c_email`, `c_name`,'product_code'
-->
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
<center> 
    <div class="FormClass">
<form method="POST" action="AddProduct.php" enctype="multipart/form-data">
   <h1> Product Name:</h1><input type="text" name="name" placeholder="Product Name" required=""><br>
    <h1>Price:</h1>  <input type="text" name="price" placeholder="Price" required=""><br>
   <!-- Company Name: <input type="text" name="c_name" placeholder="Company Name" required=""><br>
  --> <h1> Product Code:</h1>  <input type="text" name="product_code"placeholder="Product Code" required=""><br>
  <h1> Product Description:</h1>
  <textarea placeholder="Enter your Product Description " name="Description" required=""></textarea><br>
   <h1> Product Image:</h1><input 
        style="padding-left: 5px;
                           width:150px; height: 30px; margin-top: 5px;"
       type="file" name="product_image[]" multiple="" required=""><br>
    <input  style="padding-left: 5px;
                             background-color: #333; border: 1px;  
                             color: #FFF; text-align: center;width:200px; height: 40px; margin-left: 30px; margin-top: 20px;"
                             type="submit"  name="ADD" value="ADD">
</form>
   </div>
</center>
