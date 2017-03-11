


<html>
    <head>
        <title> Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="../CSSfiles/phpfile.css"/>
    </head>
    <body>
        
        <div id="login_register">
            <div id="loginhtml">
                <form action="../controller/logincontroller.php" method="POST">

                            <input type="email"   required="required" name="login_user_mail" placeholder="Enter your E-mail"/><br/>
                            <input type="password"  required="required" name="login_user_password" placeholder="Enter your password"/><br/>

                            <input type="submit"   required="required" name="login" value="Login"/><br/>
                           
                            
                        </form>
                    </div>
            <div id="Register_html">
                
                <form action="../controller/logincontroller.php" method="POST">

                    <input type="text" required="required" name="Regstir_user_name" placeholder="Enter your Name " /><br/>
                            <input type="password"  required="required" name="Register_password" placeholder="Enter your password"/><br/>
                            <input type="email"   required="required" name="Regstir_user_mail" placeholder="Enter your E-mail"/><br/>
                      <input type="tel"   required="required" name="Regstir_user_tell" placeholder="Enter your Telephone"><br/>
                                Login As: <br><select name="user_type">
                              <option>Company</option>
                              <option>Customer</option>
                          </select><br>
                          <input type="submit" required="required" name="Register" value="Register"/><br/>
                      
                            
                        </form>
            </div>
          
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

