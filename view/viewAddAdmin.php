<!-- 
`Name`, `Tel`, `user_email`, `user_password`
-->
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
<center> 
    <div class="FormClass">
        <form method="POST" action="ADDAdmin.php">
            <h1> UserName:</h1><input type="text" required="required" name="Name" placeholder="Enter the new Admin Name"><br>
            <h1>  Email:</h1><input type="email"   required="required" name="user_email" placeholder="Enter the new Admin E-mail"/><br/>
            <h1>  Password:</h1><input type="password" required="required" name="user_password" placeholder="Enter the new Admin Password"><br>
            <h1> Tell:</h1><input type="tel"required="required" name="Tel"placeholder="Enter the new Admin Tell"><br>
            <select name="usertype">

                <option value="1">1</option>
            </select>
            <br>
            <input  style="padding-left: 5px;
                    background-color: #333; border: 1px;  
                    color: #FFF; text-align: center;width:200px; height: 40px; margin-left: 30px; margin-top: 20px;"
                    type="submit"  name="ADD" value="ADD">
        </form>
    </div>
</center>
