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
        <title></title>
    </head>
    <body>
    <center>
        <div class="FormClass">

            <form action="logincontroller.php" method="POST">

                <h1> UserName:</h1><input type="text" required="required" name="Regstir_user_name" placeholder="Enter your Name " /><br/>
                <h1>  Email:</h1>    <input type="email"   required="required" name="Regstir_user_mail" placeholder="Enter your E-mail"/><br/>
                <h1>  Password:</h1>       <input type="password"  required="required" name="Register_password" placeholder="Enter your password"/><br/>
                <h1> Tell:</h1>   <input type="tel"   required="required" name="Regstir_user_tell" placeholder="Enter your Telephone"><br/>
                Login As: <br><select name="user_type">
                    <option>Company</option>
                    <option>Customer</option>
                </select><br>
                <input type="submit" required="required" name="Register" value="Register"/><br/>


            </form>
        </div>
    </center>
    <?php
    // put your code here
    ?>
</body>
</html>
<?php
}
 else {
    
               header("Location:index.php");
   

    
}
?>
