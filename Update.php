<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Update
 *
 * @author AMR
 */
class Update {

    //put your code here
    private $data;
    private $TableName;
    private $pdo;

    public function __construct($data, $TableName) {//
        if (is_array($data)) {
            $this->data = $data;
            $this->TableName = $TableName;
        } else {
            throw new Exception("please send your Data in Array(This error to Developer");
        }
        //put your code here
        //  $this->DBobject= Database::connect();
        //connect DB
                  $this->pdo =new PDO("mysql:host=sql201.eb2a.com;dbname=eb2a_17244314_mobile_web_shop", "eb2a_17244314", "01112858168", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    
        //PDO::ATTR_EMULATE_PREPARES => false: print Error (SQLSTATE[HY000]: General error: 2031)
 // $this->pdo->errorCode();
            //  $this->pdo->errorInfo();
            }
    function edit_data($user_email) {
        $statement = "UPDATE `$this->TableName` SET ";
        foreach ($this->data as $key => $value) {
            $statement .="`" . $key . "`=:" . $key . ",";
            // echo "<br>". $key."=".$this->data[$key];
        }
        $pt = "000";
        $statement.=$pt;
        $statement = str_replace("," . $pt, " ", $statement);

        $statement .= " WHERE `user_email` =:user_email ";
        // echo "<br>".$statement;
        try {
            $stmt = $this->pdo->prepare($statement);

            foreach ($this->data as $key => $value) {
               $stmt->bindValue(":$key", $this->data[$key]);
                $stmt->bindValue(":user_email", $user_email);
                 //Error:$stmt->execute(array(":$key"=>$this->data[$key],":user_email"=>$user_email));
            }

            $stmt->execute();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                //var_dump($result);
                return TRUE;
            } else {
                // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        /*
          //UPDATE `user` SET `Name`='mycompany@yahoo.com',`Tel`=' 456',`user_password`=' 123' WHERE `user_email`='mycompany@yahoo.com'
          //error:0 row affected `Tel`=' 456' it mustn't has space


          //$sql=mysql_query($query) or die($query."<br>".mysql_error());
          if($sql){
          //echo"Adding Data successful";
          return TRUE;
          }
          else {
          throw new Exception("Error:Can not excute the query(Adding)");

          return FALSE;
          }
         */
    }

    function edit_product_data($product_code) {
        $statement = "UPDATE `$this->TableName` SET ";
        foreach ($this->data as $key => $value) {
            $statement .="`" . $key . "`=:" . $key . ",";
            // echo "<br>". $key."=".$this->data[$key];
        }
        $pt = "000";
        $statement.=$pt;
        $statement = str_replace("," . $pt, " ", $statement);

        $statement .= " WHERE `product_code` =:product_code ";
        // echo "<br>".$statement;
        try {
            $stmt = $this->pdo->prepare($statement);

            foreach ($this->data as $key => $value) {
                $stmt->bindValue(":$key", $this->data[$key]);
                $stmt->bindValue(":product_code", $product_code);
                //   $stmt->execute(array(":$key"=>$this->data[$key],":user_email"=>$user_email));
            }

            $stmt->execute();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                //var_dump($result);
                return TRUE;
            } else {
                // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        /*
        $query = "UPDATE `$this->TableName` SET ";
        foreach ($this->data as $key => $value) {
            $query .="`" . $key . "`= '" . $value . " ' ,";
        }
        $pt = "000";
        $query.=$pt;
        $query = str_replace("," . $pt, " ", $query);

        $query .= " Where `product_code` =$id ";
        //UPDATE `product` SET `name`='ahmed',`price`='405023' WHERE `product_code`=2030400

        $sql = mysql_query($query) or die($query . "<br>" . mysql_error());
        if ($sql) {
            //echo"Adding Data successful";
            return TRUE;
        } else {
            throw new Exception("Error:Can not excute the query(Adding)");

            return FALSE;
        }*/
    }

    function edit_recieving_date($recievingDate,$company_email, $customer_email, $id) {
         $statement = "UPDATE `$this->TableName` SET `RecievingDate`=:recievingDate WHERE `company_email` =:company_email and `customer_email`=:customer_email and `id`=:id";
        // echo "<br>".$statement;
        try {
            $stmt = $this->pdo->prepare($statement);

                 $stmt->bindValue(":recievingDate", $recievingDate);
                $stmt->bindValue(":company_email", $company_email);
                $stmt->bindValue(":customer_email", $customer_email);
                $stmt->bindValue(":id", $id);
                $this->pdo->errorInfo();
                //   $stmt->execute(array(":$key"=>$this->data[$key],":user_email"=>$user_email));
            

            $stmt->execute();
           // $this->pdo->errorCode();
            //  $this->pdo->errorInfo();
           $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                //var_dump($result);
                return TRUE;
            } else {
                // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage()."<br>Can't Update (Class)";
        }
        /*
        
        $query = "UPDATE `$this->TableName` SET ";
        foreach ($this->data as $key => $value) {
            $query .="`" . $key . "`='" . $value . "',";
        }
        $pt = "000";
        $query.=$pt;
        $query = str_replace("," . $pt, " ", $query);

        $query .= " WHERE `company_email` ='$company_email' and `customer_email`='$customer_email' and `id`=$id";
        //UPDATE `user` SET `Name`='mycompany@yahoo.com',`Tel`=' 456',`user_password`=' 123' WHERE `user_email`='mycompany@yahoo.com'
        //error:0 row affected `Tel`=' 456' it mustn't has space


        $sql = mysql_query($query) or die($query . "<br>" . mysql_error());
        if ($sql) {
            //echo"Adding Data successful";
            //   echo $query."<br>";
            return TRUE;
        } else {
            throw new Exception("Error:Can not excute the query(Adding)");

            return FALSE;
        }*/
    }

}
