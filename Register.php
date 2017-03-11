<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author Amr
 */
class Register {

    private $username;
    private $email;
    private $password;
    private $tell;
    //private $DBobject;
    private $pdo;
    private $user_type;

    function __construct($data) {
        //set_data
        if (is_array($data)) {//لو الداتا دى فى اراى اعملها ست
            $this->set_data($data);
        } else {

            throw new Exception("Error:Data must be in an array"); //ده كلاس فىه فانكشن اسمها جيت ماسيج (getMessage())
        }
        //connect to DB
           $this->pdo =new PDO("mysql:host=sql201.eb2a.com;dbname=eb2a_17244314_mobile_web_shop", "eb2a_17244314", "01112858168", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //$this->DBobject= Database::connect();
        //
        //insert data
       // $this->Register_user();
        
        //close DB
       // $this->closeDB();
    }

    private function set_data($data) {

        $this->username = $data['user_name'];
        $this->email = $data['useremail'];
        $this->password = $data['password'];
        $this->user_type = $data['user_type'];
        $this->tell = $data['user_tell'];
    }

    public function Register_user() {
        $user_type = $this->getUserType();
        try {

          $statement = "INSERT INTO `user`( `Name`,`Tel`,`user_email`,`user_password`,`UserType`) VALUES (:username, :tell,:user_email,:user_password,:user_type) ";
           $stmt = $this->pdo->prepare($statement);
            $stmt->execute(array(':username' => $this->username, ':tell' => $this->tell, ':user_email' => $this->email, ':user_password' => $this->password, ':user_type' => $user_type));
           
            $excuteArray=array(':username' => $this->username, ':tell' => $this->tell, ':user_email' => $this->email, ':user_password' => $this->password, ':user_type' => $user_type);
                   // var_dump($excuteArray);
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return TRUE;
            } else {
             throw new Exception("<script type='text/javascript' > alert('User email or Password not valid,please try again (Number of Rows Exception) ');history.back();</script>");
            return FALSE;
            
            }
            
            
            
            } catch (Exception $exc) {
          //  echo $exc->getMessage();
                             throw new Exception("<script type='text/javascript' > alert('User email or Password not valid,please try again  ');history.back();</script>");

        }
        /*  $query="INSERT INTO `user`( `Name`,`Tel`,`user_email`,`user_password`,`UserType`) VALUES ('$this->username', '$this->tell','$this->email','$this->password',$user_type) ";
          //          echo $query="INSERT INTO `user`( `Name`, `user_email`, 'Tel',`user_password`,`UserType`) VALUES ('$this->username','$this->email','$this->tell','$this->password',$user_id) ";

          $sql=mysql_query($query)or die("<script type='text/javascript' > alert('User email or Password not valid,please try again with new data please ');history.back();</script>");
          //die($query."<br><br>".mysql_error());
          /*   if($sql){
          }
          else {


          //throw new Exception("Error:Regestration Failed");

          } */
    }

    function closeDB() {

        unset($this->pdo);
        $this->pdo = NULL;
    }

    private  function getUserType() {
        try 
        
        {

            $statement = "select id from usertype where type=:user_type";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindParam(":user_type", $this->user_type, PDO::PARAM_INT);
            //$stmt->bindParam(":user_password",  $this->password, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch();
         
            return $row['id'];
        } 
        catch (Exception $exc) {
            echo $exc->getMessage();
        }
        
        
        /*     $user_type_query="select id from usertype where type='$this->user_type' ";

          $user_type_sql=  mysql_query($user_type_query) or die($user_type_query."<br><br>".mysql_error());
          $user_type_check=  mysql_num_rows($user_type_sql);
          while($result=  mysql_fetch_array($user_type_sql)){

          $m= $result['id'];

          return  $m;
          }
         */
    }

    //put your code here
}
