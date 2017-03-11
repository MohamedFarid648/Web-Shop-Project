 <?php
        if (isset($_POST['Send'])) {




           $Send_User_Name = $_POST['Send_User_Name'];
             $Send_User_Email = $_POST['Send_User_Email'];
           $Message = $_POST['Message'];
            $to = 'mohamedgalal9454@gmail.com';
            $subject = "Mail From <font color='red'> " . $Send_User_Email . "</font>";
            $send = mail($to, $subject, $Message);
            $subject2 = "You sent Email to :<font color='red'>" . $to . "</font>";
            $send2 = mail($Send_User_Email, $subject2, $Message);

            if ($send == TRUE and $send2 == TRUE) {

                echo '<script type="text/javascript" > alert("Send Email Successfully");history.back();</script>';
            } else {
                echo '<script type="text/javascript" > alert("Send Email Failed");history.back();</script>';
            }
        }
        else{
               header("Location:index.php");
        }
        ?>