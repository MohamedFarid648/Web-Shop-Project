

<html>
    <body>
        <div class="Side_body"> 
            <ul>
                <li><a href="?page=ADDAdmin">+ ADD New Admin</a></li>
                <li><a href=?page=EditProfile>Edit Profile </a></li>
                <li><a href="?page=UploadFiles">My Images</a></li>
            </ul>
            
        </div>
   
    

    



     
<div id="LatestProject">
        <h1>Admins:</h1>
        
       
    <?php 
//echo'hhhhhhhhhhhhh';
      // include './modols/DBClass.php';
     
     // include './modols/Display.php';
      
      $data= new Display('user');
      $DisplayAllDataCompanyVariable= $data->DisplayAllDataByUsrType(1);   
     // print_r($DisplayAllDataVariable);
      if($DisplayAllDataCompanyVariable){
      
             for($i=0;$i<count($DisplayAllDataCompanyVariable);$i++){
        
            ?>
            <div class="Project">
                <?php
              
                          
                            echo"<img width='140' height='100' src='images/life.jpg' > ";
                     
                ?>
                <h2>
                    <?php
                    ?></h2>

                <p>
                    <?php
                    echo'  Name:<font color="red"> <b>' . $DisplayAllDataCompanyVariable[$i]['Name'].'</font></b>';
                    echo'<br /> Email:<font color="red">' . $DisplayAllDataCompanyVariable[$i]['user_email'].'</font>';
                    echo'<br />  Tell:<font color="red"> ' . $DisplayAllDataCompanyVariable[$i]['Tel'].'</font>';
                    echo" <br /><a href='?page=Companypage&Name=".$DisplayAllDataCompanyVariable[$i]['Name'].
                "&user_email=".$DisplayAllDataCompanyVariable[$i]['user_email'].
                "&Tel=".$DisplayAllDataCompanyVariable[$i]['Tel']. "'>";

                echo "Details";
                    echo"</a>";
                    ?>
            </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no Admins Except you  untill now ^_^ </font>';
    }
    ?>
</div><!-- End of LatestProject -->

<br /> <hr />

    <div id="LatestProject">
        <h1>Companies:</h1>
        
    <?php 
//echo'hhhhhhhhhhhhh';
      // include './modols/DBClass.php';
     
     // include './modols/Display.php';
      
      $data= new Display('user');
      $DisplayAllDataCompanyVariable= $data->DisplayAllDataByUsrType(3);   
     // print_r($DisplayAllDataVariable);
      if($DisplayAllDataCompanyVariable){
      
             for($i=0;$i<count($DisplayAllDataCompanyVariable);$i++){
        
            ?>
            <div class="Project">
                <?php
              
                          
                            echo"<img width='140' height='100' src='images/life.jpg' > ";
                     
                ?>
                <h2>
                    <?php
                    ?></h2>

                <p>
                    <?php
                    echo' Company Name:<font color="red"> <b>' . $DisplayAllDataCompanyVariable[$i]['Name'].'</font></b>';
                    echo'<br />Company Email:<font color="red">' . $DisplayAllDataCompanyVariable[$i]['user_email'].'</font>';
                    echo'<br />  Tell:<font color="red"> ' . $DisplayAllDataCompanyVariable[$i]['Tel'].'</font>';
                    echo'<br />Action:';
                    echo"<a href='?page=Delete_Company&action=delete&"
                    . "id={$DisplayAllDataCompanyVariable[$i]['id']}"
                    . "&user_email={$DisplayAllDataCompanyVariable[$i]['user_email']}'>
                        Delete</a>
                        <br>";
                    echo" <br /><a href='?page=Companypage&Name=".$DisplayAllDataCompanyVariable[$i]['Name'].
                "&user_email=".$DisplayAllDataCompanyVariable[$i]['user_email'].
                "&Tel=".$DisplayAllDataCompanyVariable[$i]['Tel']. "'>";

                echo "Details";
                    echo"</a>";
                    ?>
            </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no Companies untill now ^_^ </font>';
    }
    ?>
</div><!-- End of LatestProject -->
<br /><br /><br /> <hr />
  
    
  
      


          <div id="LatestProject">
        <h1>Customers:</h1>
        
    <?php 
//echo'hhhhhhhhhhhhh';
      // include './modols/DBClass.php';
     
     // include './modols/Display.php';
      
      $data= new Display('user');
      $DisplayAllDataCustomerVariable= $data->DisplayAllDataByUsrType(2);   
     // print_r($DisplayAllDataVariable);
      if($DisplayAllDataCustomerVariable){
      
             for($i=0;$i<count($DisplayAllDataCustomerVariable);$i++){
        
            ?>
            <div class="Project">
                <?php
              
                          
                            echo"<img width='140' height='100' src='images/life.jpg' > ";
                     
                ?>
                <h2>
                    <?php
                    ?></h2>

                <p>
                    <?php
                    echo'  Name:<font color="red"> <b>' . $DisplayAllDataCustomerVariable[$i]['Name'].'</font></b>';
                    echo'<br /> Email:<font color="red">' . $DisplayAllDataCustomerVariable[$i]['user_email'].'</font>';
                    echo'<br />  Tell:<font color="red"> ' . $DisplayAllDataCustomerVariable[$i]['Tel'].'</font>';
                   echo'<br />Action:';
                    echo"<a href='?page=Delete_Company&action=delete&"
                    . "id={$DisplayAllDataCustomerVariable[$i]['id']}"
                    . "&user_email={$DisplayAllDataCustomerVariable[$i]['user_email']}'>
                        Delete</a>
                        <br>";
                    echo" <br /><a href='?page=Companypage&Name=".$DisplayAllDataCustomerVariable[$i]['Name'].
                "&user_email=".$DisplayAllDataCustomerVariable[$i]['user_email'].
                "&Tel=".$DisplayAllDataCustomerVariable[$i]['Tel']. "'>";

                echo "Details";
                    echo"</a>";
                    ?>
            </p>
            </div>
            <?php
        }//end of for loop
    }//end of $DisplayAllDataVariable
    else {
        echo '<font color="blue">There is no Customers untill now ^_^ </font>';
    }
    ?>
</div><!-- End of LatestProject -->

    </body>
</html>
