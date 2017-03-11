
     <?php  
if(isset($_GET['page'])){
    
    

?>
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

<?php
}
 else {
    
               header("Location:../index.php");
   

    
}
?>