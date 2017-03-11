<?php

if ($_POST) {//هل فى بوست ولا لا
    //Login  
    session_start();
    if (isset($_POST['login'])) {
         $useremail = $_POST['login_user_mail'];
         $userpassword = $_POST['login_user_password'];
        //  echo 'ok';
         
           try {
             include 'Validator.php';
            $valid = new Validator();
            $rules = array(
                "login_user_mail" => "checkRequired|checkEmail",
                "login_user_password" => "checkRequired"
                );

            if (!$valid->validate($_POST, $rules)) {
                /*if Write : $valid->validate($_POST, $rules)
                    it will add data before santization
                 *        
                 *          */
                die();
           // echo'No validate' ;
                
            }
        } catch (Exception $exc) {
            echo $exc->getMessage()."<br>Validator Login  Error";
            die();
        }

        try {
          //  include '../modols/Database.php';
            include 'Login.php';
            $login = new login($useremail, $userpassword);
            $rowCount=$login->getData();
            //روح اعمل شيك باللايميل والباسورد فى كلاس الوج ان
            if ( $rowCount==TRUE) {//لو عدد الصفوف اكبر من واحد يعنى اليوسر موجود
              //  echo 'ok Login';
                $_SESSION['useremail'] = $useremail; //بنفس اسم السيشن اللى فى ال اندكس  وبعد كده روح على صفحة ال اندكس 
                // $login->closeDB();
              header('Location:index.php'); //روح على ااندكس
            
              
            }
 else {}
        }//end of try
        catch (Exception $exc) {
           echo $exc->getMessage()."<br>Login Error";
           // echo '<script type="text/javascript" > alert("User name or Password not valid,please try again");history.back();</script>';
        }//end of catch
    }//end of login isset
    //Register

    if (isset($_POST['Register'])) {
       
          include 'Validator.php';
            $valid = new Validator();
            
        $data['user_name'] = $_POST['Regstir_user_name'];
        $data['password'] = $_POST['Register_password'];
        $data['useremail'] =$valid->santization($_POST['Regstir_user_mail'], 'email') ;
        //$_POST['Regstir_user_mail'];
     // $valid->santization($_POST['Regstir_user_mail'], 'email') ;
    
        $data['user_type'] = $_POST['user_type'];
        $data['user_tell']=  $_POST['Regstir_user_tell'];
        // print_r($data);
        try {
          
            $rules = array("user_name" => "checkRequired|checkString",
                "useremail" => "checkRequired|checkEmail",
                "password" => "checkRequired",
                "user_tell"=>"checkRequired|checkINT"
                );

            if (!$valid->validate($data, $rules)) {
                /*if Write : $valid->validate($_POST, $rules)
                    it will add data before santization
                 *                  */
                die();
            }
        } catch (Exception $exc) {
            echo $exc->getMessage()."<br>Validator Registeration Error";
            die();
        }


        try {
            
            include 'Register.php';
            $register = new Register($data);
            //   $n->Register_user();
            //   $user_type=$n->getid();
            $rowCountRegister=$register->Register_user();
            if ($rowCountRegister>0) {
              //  session_start(); //افتحلى سيشن
               $_SESSION['useremail'] = $data['useremail']; //بنفس اسم السيشن اللى فى ال اندكس  وبعد كده روح على صفحة ال اندكس 
               $_SESSION['user_type'] = $data['user_type'];
               $_SESSION['user_name']=$data['user_name'];
                $folderPath = "uploaded/" . $_SESSION['useremail'];
            
                  mkdir("$folderPath");
                // mkdir(path,mode,recursive,context);
                //refrences:http://www.w3schools.com/php/func_filesystem_mkdir.asp
                //   header('Location:user_account.php');//روح على ااندكس
                header('Location:index.php'); //روح على ااندكس
            }
        } catch (Exception $ex) {
           echo $ex->getMessage()."<br>Registeration Error";//اطبع الماسيج اللى انا كتبتهالك  
        }
        //include 'Mainpage.php'; 
    }
}//end if POST
else {
 
                header("Location:index.php");

      
}
    /*else{
        include './login.php';
    }
    */











/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//try{
    
    
/* include '/modols/Database.php';
$vars=  include '/includes/vars.php';
new Database("includes/vars.php");

$username=$_POST['login_user_name'];
$user_mail=$_POST['login_user_mail'];
$sql="Delete from users where user_email='$user_mail' ";

if($_POST['login']){
    
    echo "your name is ".$username."<br>";
    echo "your mail is".$user_mail."<br>";

mysql_query($sql) or die();
    
    echo 'success deleting';



}*/

    
//}
// catch (Exception $excep){echo $ecxep->getMessage;}
