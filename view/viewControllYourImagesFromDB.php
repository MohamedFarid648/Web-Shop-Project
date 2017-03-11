
<?php 
 include './view/Libraries.php';
?>
<br>
<h1>
   

        <?php
//echo'hhhhhhhhhhhhh';
        // include './modols/DBClass.php';
        include './modols/Database.php';
        include './modols/Display.php';

        $data = new Display('MyFiles');
        $DisplaySpecialDataVariable = $data->DisplaySpecialuser_File($_SESSION['useremail']);
        // print_r($DisplaySpecialDataVariable);
       if($DisplaySpecialDataVariable){
           //`id`, `file_name`, `file_URL`, `date`, `user_email`
           echo ' <table border="1" width="100%" cellspacing="20" cellpadding="25">

        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>URL</th>
            <th>Date: </th>
            <th>User Email:</th>
             <th>Action:</th>


        </tr>';
        for ($i = 0; $i < count($DisplaySpecialDataVariable); $i++) {

            echo " <tr>
        <td>{$DisplaySpecialDataVariable[$i]['id']}</td>
        <td>  {$DisplaySpecialDataVariable[$i]['file_name']}</td>
        <td>{$DisplaySpecialDataVariable[$i]['file_URL']}</td>
        <td>{$DisplaySpecialDataVariable[$i]['date']}</td>
       <td>{$DisplaySpecialDataVariable[$i]['user_email']}</td>
         <td> <a href='?page=ControllYourImagesFromDB&action=Delete&id={$DisplaySpecialDataVariable[$i]['id']}'>Delete</a><br>

       

        
    </tr>
    
";
        }
        echo '    </table></h1>';
       }
       else{
           
           
                     echo '<h1>You did not Add Any Files until now  ^_^  </h1>';

       }
        ?>