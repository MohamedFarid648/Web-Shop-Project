
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
        <title>Contact Us</title>
    </head>
    <body>
        <div id="ContactUs">
        <h1 style="font-family: Verdana,Geneva,sans-serif;
            font-size: 17px;
            color: #cb0030;
            margin-bottom: 20px;">Email:</h1>
        <ul>
            <li>

                <a style=" text-decoration: none;
                   font-family: Verdana,Geneva,sans-serif;
                   font-size: 12px;
                   color: #60030;margin-bottom: 5px;
                   " href="mailto:Mohamed.Abdullah@fci.helwan.edu.eg"> 
                    Mohamed.Abdullah@fci.helwan.edu.eg</a>
            </li>



            <li>
                <a style=" text-decoration: none;
                   font-family: Verdana,Geneva,sans-serif;
                   font-size: 12px;
                   color: #60030;margin-bottom: 5px;
                   " href="mailto:mohamedgalal9454@gmail.com"> 
                    mohamedgalal9454@gmail.com
                </a>

            </li>


            <li>
                <a style=" text-decoration: none;
                   font-family: Verdana,Geneva,sans-serif;
                   font-size: 12px;
                   color: #60030;margin-bottom: 5px;
                   " href="mailto:mohamed_galal9454@yahoo.com">

                    mohamed_galal9454@yahoo.com
                </a>
            </li>

        </ul>
        <hr>
        <h1 style="font-family: Verdana,Geneva,sans-serif;
            font-size: 17px;
            color: #cb0030;
            margin-bottom: 20px;">Skype:</h1>
        <h3>mohamed.gallal9454</h3>
        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>
<?php
}
 else {
    
               header("Location:../index.php");
   

    
}
?>