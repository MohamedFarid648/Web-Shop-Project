<!-- 
`Name`, `Tel`, `user_email`, `user_password`
-->
<a style="float: right;text-decoration: none;
   font-size: 14px;line-height: 20px;
                   font-family: Verdana,Geneva,sans-serif;
   color: #592c5f; margin-right:30px;" href="?page=user_switch">Back</a>
   <?php
//include './modols/Display.php';
   $user_email = $_SESSION['useremail'];
   $data = new Display('user');

   $DisplaySpecialuser = $data->DisplaySpecialuser($_SESSION['useremail']);
//var_dump($DisplaySpecialuser);
   ?>
<center> 
    <div class="FormClass">
        <form method="POST" action="EditProfile.php">
            <h1> UserName:</h1><input type="text" required="required" name="Name" value="<?php echo $DisplaySpecialuser['Name']; ?>"><br>
            <h1>Password:</h1><input type="password" required="required" name="user_password" value="<?php echo $DisplaySpecialuser['user_password']; ?>"><br>
            <h1>Tell:</h1><input type="tel" required="required" name="Tel" value="<?php echo $DisplaySpecialuser['Tel']; ?>"><br>
            <br>
            <input type="submit"  required="required"name="Edit" value="Edit">
        </form>
    </div>
</center>
  
<?php
/* <!-- 
  `Name`, `Tel`, `user_email`, `user_password`
  -->


  include './modols/Display.php';
  $user_email=$_SESSION['useremail'];
  $data=new Display('user');

  $DisplaySpecialuser=$data->DisplaySpecialuser($_SESSION['useremail']);
  //var_dump($DisplaySpecialuser);
  for ($index = 0; $index < count($DisplaySpecialuser); $index++) {
  /*  echo '<br>'.$DisplaySpecialuser[$index]['Name'];
  echo '<br>'.$DisplaySpecialuser[$index]['user_password'];
  echo '<br>'.$DisplaySpecialuser[$index]['Tel']; */
/* echo '
  <form method="POST" action="./controller/EditProfile.php">
  UserName:<input type="text" name="Name" value="'.$DisplaySpecialuser[$index]['Name'].'"><br>
  Password:<input type="password" name="user_password" value="'.$DisplaySpecialuser[$index]['user_password'].'"><br>
  Tell:<input type="tel" name="Tel" value="'.$DisplaySpecialuser[$index]['Tel'].'"><br>
  <br>
  <input  style="padding-left: 5px;
  background-color: #333; border: 1px;
  color: #FFF; text-align: center;width:200px; height: 40px; margin-left: 30px; margin-top: 20px;"
  type="submit"  name="Edit" value="Edit">
  </form>';
  } */
?>
