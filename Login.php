<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Amr
 */
class login {

    //put your code here
    private $useremail;
    private $password;
    // private $DBobject;
    private $pdo;

    function __construct($useremail, $password) {
        //set data
        $this->setData($useremail, $password);
        //connect DB
                   $this->pdo =new PDO("mysql:host=sql201.eb2a.com;dbname=eb2a_17244314_mobile_web_shop", "eb2a_17244314", "01112858168", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //get data
        //  $this->getData();
    }

    private function setData($useremail, $password) {
        $this->useremail = $useremail;
        $this->password = $password;
    }

    private function getusertype() {


        try {

            $statement = "select type from user,usertype where usertype.id=UserType and  user_email=:user_email and user_password=:user_password ";
            $stmt = $this->pdo->prepare($statement);
            // $stmt->bindParam(":user_email", $this->useremail, PDO::PARAM_STR);
            //OR:$stmt->bindValue(":user_password",  $this->password, PDO::PARAM_STR);
            $stmt->execute(array(':user_email' => $this->useremail, ':user_password' => $this->password));

            $row = $stmt->fetch();

           
            return $row['type'];
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function getusername() {
        try {

            $statement = "select Name from user where user_email=:user_email and user_password=:user_password ";
            $stmt = $this->pdo->prepare($statement);
            $stmt->execute(array(':user_email' => $this->useremail, ':user_password' => $this->password));
            $row = $stmt->fetch();

          
            return $row['Name'];
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function getData() {
        //session_start();
        $_SESSION['user_type'] = $this->getusertype();
        $_SESSION['user_name'] = $this->getusername();

        try {

            $statement = "select * from user where user_email=:user_email and user_password=:user_password ";
            $stmt = $this->pdo->prepare($statement);
            $stmt->execute(array(':user_email' => $this->useremail, ':user_password' => $this->password));
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return TRUE;
            } else {
                throw new Exception("<script type='text/javascript' > alert('User email or Password not valid,please try again  ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        /*  $query = "select * from user where user_email=:user_email  and user_password=:user_password ";

          $sql = mysql_query($query) or die($query . "<br/><br/>" . mysql_error());
          //very very important:
          //mysql_error() will tell you what is the error?
          // mysql_query($query); //or die("user email or your password is not valid ,please try again");
          // mysql_num_rows($sql);//هيرجع عدد ل صفوف اللى جت من الكويرى
          if (mysql_num_rows($sql) > 0) {//mysql_num_rows($sql)>0
          return TRUE;
          echo 'ok';
          } else {
          throw new Exception("user email or your password is not valid ,please try again");
          }
         */
    }

    function closeDB() {

        unset($this->pdo);
        $this->pdo = NULL;
    }

}
