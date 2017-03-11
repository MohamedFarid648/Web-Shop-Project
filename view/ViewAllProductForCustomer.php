  <a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
                   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
<div id="LatestProject">
    <h1>Products:</h1>

    <?php
   
    $data = new Display('product');

    $DisplayAllDataVariable = $data->DisplayAllData(); //DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);  
    if ($DisplayAllDataVariable) {


        for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {

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
                    echo' Company Name:<font color="red"> <b> ' . $DisplayAllDataVariable[$i]['c_name'].'</font></b>';
                    echo'<br />Company Email:' . $DisplayAllDataVariable[$i]['c_mail'];
                    echo'<br />  Price:<font color="red"> <b>$' . $DisplayAllDataVariable[$i]['price'].'</font></b>';
                    echo'<br /> Date:' . $DisplayAllDataVariable[$i]['date'] ;
                    echo"<a href='?page=BuyProduct&action=Buy&product_code={$DisplayAllDataVariable[$i]['product_code']}&name={$DisplayAllDataVariable[$i]['name']}&price={$DisplayAllDataVariable[$i]['price']}&c_mail={$DisplayAllDataVariable[$i]['c_mail']}&c_name={$DisplayAllDataVariable[$i]['c_name']}&product_image={$DisplayAllDataVariable[$i]['product_image']}'>Buy</a>";
                    echo"<br /> <br /> <a href='?page=ProductPage&id=".$DisplayAllDataVariable[$i]['product_code']."'>";


                    echo $DisplayAllDataVariable[$i]['name'];
                    echo"</a>";
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






            
  
          <?php /*
//echo'hhhhhhhhhhhhh';
      // include './modols/DBClass.php';
    include './modols/Database.php';
      include './modols/Display.php';
      
      $data= new Display('product');
      $DisplayAllDataVariable= $data->DisplayAllData();   
     // print_r($DisplayAllDataVariable);
      if($DisplayAllDataVariable){
          echo'    <table border="1" width="100%" cellspacing="10" cellpadding="10">
    
        <tr>
        
        
        <th>Name</th>
        <th>Price</th>
        <th>Company Name: </th>
        <th>Company Email:</th>
        <th>Product Code</th>
       
    </tr>
';
             for($i=0;$i<count($DisplayAllDataVariable);$i++){
                 
                 echo " <tr>
        <td>  {$DisplayAllDataVariable[$i]['name']}</td>
        <td>{$DisplayAllDataVariable[$i]['price']}</td>
        <td>{$DisplayAllDataVariable[$i]['c_name']}</td>
       <td>{$DisplayAllDataVariable[$i]['c_mail']}</td>

        <td>{$DisplayAllDataVariable[$i]['product_code']}</td>
   <td> <a href='?page=BuyProduct&action=Buy&product_code={$DisplayAllDataVariable[$i]['product_code']}&name={$DisplayAllDataVariable[$i]['name']}&price={$DisplayAllDataVariable[$i]['price']}&c_mail={$DisplayAllDataVariable[$i]['c_mail']}&c_name={$DisplayAllDataVariable[$i]['c_name']}'>Buy</a><br>
       

        
    </tr>
    
";           }
                              echo '    </table></h1>';
      }
      
      
      */

?>
