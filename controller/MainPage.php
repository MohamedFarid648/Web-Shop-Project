<?php  
if(isset($_GET['page'])){
    
    

?>

                        <div id="slider">
                            <?php
                            $data = new Display('product');

                            $num = 10;
                            $DisplayAllDataVariable = $data->DisplayLastProducts($num); //DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);  
                            if ($DisplayAllDataVariable) {


                                for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {

                                    $uploadDirectory = "uploaded/" . $DisplayAllDataVariable[$i]['c_mail'] . "/";



                                    $dir = scandir($uploadDirectory);
                                    $dirAfterDeleted = array_diff($dir, array(".", ".."));
                                    if ($dirAfterDeleted) {
                                        foreach ($dirAfterDeleted as $value) {
                                            if ($value == $DisplayAllDataVariable[$i]['product_image']) {
                                                echo"<a href='?page=ProductPage&id=" . $DisplayAllDataVariable[$i]['product_code'] . "'>";
                                                /* echo"<a href='?page=ProductPage&Company_Name=" . $DisplayAllDataVariable[$i]['c_name'] .
                                                  "&Company_Email=" . $DisplayAllDataVariable[$i]['c_mail'] .
                                                  "&Price=" . $DisplayAllDataVariable[$i]['price'] .
                                                  "&Date=" . $DisplayAllDataVariable[$i]['date'] .
                                                  "&Name=" . $DisplayAllDataVariable[$i]['name'] .
                                                  "&product_image=" . $DisplayAllDataVariable[$i]['product_image'] . "'>";
                                                 */
                                                echo"<img width='810' height='330' src='$uploadDirectory$value' no-repeat='' alt='{$DisplayAllDataVariable[$i]['name']} '> ";

                                                echo"</a>";
                                            }//end of if $value == $DisplayAllDataVariable[$i]['product_image']
                                        }//end of foeach
                                    }//end of if dirAfterDeleted
                                }
                            } else {
                                echo '<font color="blue">There is no products untill now ^_^ </font>';
                            }
                            ?>


                        </div><!-- End of slider -->


<div id="LatestProject">
    <h1>Latest Products:</h1>

    <?php
    $data = new Display('product');
      $num=6;
    $DisplayAllDataVariable = $data->DisplayLastProducts($num); //DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);  
    if ($DisplayAllDataVariable) {


        for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {
//echo $DisplayAllDataVariable[$i]['product_image']."<br><br>";
            $uploadDirectory = "uploaded/" . $DisplayAllDataVariable[$i]['c_mail'] . "/";
            ?>
            <div class="Project">
                <?php
                $dir = scandir($uploadDirectory);
                $dirAfterDeleted = array_diff($dir, array(".", ".."));
                if ($dirAfterDeleted) {
                    foreach ($dirAfterDeleted as $value) {
                        if ($value == $DisplayAllDataVariable[$i]['product_image']) {
                            $imageName = $DisplayAllDataVariable[$i]['name'];
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
                    echo'<br /> Date:' . $DisplayAllDataVariable[$i]['date'] . '<br />';
                                     echo"<a href='?page=ProductPage&id=".$DisplayAllDataVariable[$i]['product_code']."'>";

                    /*  echo"<a href='?page=ProductPage&Company_Name=" . $DisplayAllDataVariable[$i]['c_name'] .
                    "&Company_Email=" . $DisplayAllDataVariable[$i]['c_mail'] .
                    "&Tel=" . $DisplayAllDataVariable[$i]['name'] .
                    "&Price=" . $DisplayAllDataVariable[$i]['price'] .
                    "&Date=" . $DisplayAllDataVariable[$i]['date'] .
                    "&Name=" . $DisplayAllDataVariable[$i]['name'] . 
                    "&product_image=" . $DisplayAllDataVariable[$i]['product_image'] . "'>";
*/
                    echo $DisplayAllDataVariable[$i]['name'];
                    echo"</a>";
                    ?>
                </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no products untill now ^_^ </font>';
    }
    ?>



</div><!-- End of LatestProject -->

<?php
}
 else {
    
               header("Location:../index.php");
   

    
}
?>
<!--  	
 <div class="new">
<h2>Latest Phone Models </h2>
<div class="product">
            <img alt="Mobile Phone Website 1" src="images/templatemo_product.jpg" />
        <div class="product_text">
            <h3>New Model One</h3>
          <p>Nulla sed leo sed sapien sagittis aliquet. Vivamus vestibulum condimentum massa.<br />
            <span class="price">$600</span> <span class="detail"><a href="#">View Specs</a></span>
          </p>
            
        </div>
    </div>
    
    <div class="product">
            <img alt="Mobile Phone Website 2" src="images/templatemo_product.jpg" />
        <div class="product_text">
            <h3>Super Phone Two</h3>
            <p>Sed pretium, neque hendrerit rhoncus accumsan, nibh tellus pharetra neque, quis rutrum elit justo vitae sapien.<br />
            <span class="price">$500</span> <span class="detail"><a href="#">View Specs</a></span>
            </p>
        </div>                   
    </div>
    
    <div class="product">
            <img alt="Mobile Phone Website 3" src="images/templatemo_product.jpg" />
        <div class="product_text">
            <h3>High End Mobile Three</h3>
            <p>Donec a purus vel purus sollicitudin placerat. Nunc at sem. Sed pellentesque placerat augue. Phasellus id purus.<br />
            <span class="price">$400</span> <span class="detail"><a href="#">View Specs</a></span>
            </p> 
        </div>                   
    </div>
    
    <div class="product">
            <img alt="Mobile Phone Website 4" src="images/templatemo_product.jpg" />
        <div class="product_text">
            <h3>Future  Mobile Four</h3>
            <p>Sed pellentesque placerat augue. Phasellus id purus. Donec a purus vel purus sollicitudin placerat. Nunc at sem.<br />
            <span class="price">$350</span> <span class="detail"><a href="#">View Specs</a></span>
            </p> 
        </div>                   
    </div>
    
    <a href="#"><img alt="Read More" src="images/template_more_blue.jpg" /></a>
    <br />&nbsp;
 </div>
-->





<?php
//echo'hhhhhhhhhhhhh';
// include './modols/DBClass.php';
//(`product_code`, `customer_email`, `product_name`, `company_name`, `company_email`, `price`                                $ADD_Product['product_name']=$_GET['name'];
/*
  include './modols/Display.php';

  $data = new Display('product');

  $DisplayAllDataVariable = $data->DisplayLastProducts(); //DisplayAllData();//DisplayCustomerProducts($_SESSION['useremail']);
  //print_r($DisplayAllDataVariable);
  //  echo' <div id="projects"';
  if ($DisplayAllDataVariable) {
  //                 <table border="2"  style="width: 10%; height: 40%;" >


  for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {
  echo' <div class="Myproduct"';
  $uploadDirectory = "images/uploaded/" . $DisplayAllDataVariable[$i]['c_mail'] . "/";


  $dir = scandir($uploadDirectory);
  $dirAfterDeleted = array_diff($dir, array(".", ".."));
  if ($dirAfterDeleted) {
  foreach ($dirAfterDeleted as $value) {
  if ($value == $DisplayAllDataVariable[$i]['product_image']) {

  echo"<td>  <img src='$uploadDirectory$value'> </td>
  ";
  }//end of if $value == $DisplayAllDataVariable[$i]['product_image']
  }//end of foeach
  }//end of if dirAfterDeleted
  /*     echo' <div class="product_text">';
  echo'<h3>'.$DisplayAllDataVariable[$i]['name'].'</h3>';
  echo'<p>'.'Email:'.$DisplayAllDataVariable[$i]['c_mail'].'<br />'.'Name:'.$DisplayAllDataVariable[$i]['c_name'].'<br />';
  echo'   <span class="price">$'.$DisplayAllDataVariable[$i]['price'].'</span>' ;
  echo' </p>';
  echo' </div>';
  echo' </div>'; */
/*     echo'<p>';
  echo' <br>Product code:' . $DisplayAllDataVariable[$i]['product_code'];
  echo' <br>Company Name: ' . $DisplayAllDataVariable[$i]['c_name'];
  echo'<br>Company Email:<br>' . $DisplayAllDataVariable[$i]['c_mail'];
  echo'<br>Product Name:' . $DisplayAllDataVariable[$i]['name'];
  echo'  <br>Price:$' . $DisplayAllDataVariable[$i]['price'];
  echo'  <br>Date:' . $DisplayAllDataVariable[$i]['date'];

  echo'</p>';
  echo' </div>';
  }//end of for loop
  echo' </div>';
  }//end of $DisplayAllDataVariable

  else {
  echo '<font color="blue">There is no product untill now ^_^ </font>';
  } */
?>



