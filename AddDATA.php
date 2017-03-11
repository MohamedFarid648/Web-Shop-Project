<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ADD
 *
 * @author AMR
 */
class AddDATA {

    //put your code here
    private $data;
    private $TableName;
    private $pdo;

    public function __construct($data, $TableName) {
        if (is_array($data)) {
            $this->data = $data;
            $this->TableName = $TableName;
        } else {
            throw new Exception("please send your Data in Array(This error to Developer");
        }
        //Connect to DB
           $this->pdo =new PDO("mysql:host=sql201.eb2a.com;dbname=eb2a_17244314_mobile_web_shop", "eb2a_17244314", "01112858168", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //$this->connectToDB();
        // $this->DBobject= Database::connect();
        $this->Add();
        //$this->closeDB();
    }

    private function Add() {

        foreach ($this->data as $key => $value) {

            $keys[] = $key;
            $values[] = $value;
        }

        try {
            $TableKeys = implode($keys, " ,");
            $pdoKeys = ":" . implode($keys, ",:");
             //ex: :Name,:user_email,:...
            
            $statement = "Insert into $this->TableName ($TableKeys) values ($pdoKeys ) ";
            $stmt = $this->pdo->prepare($statement);
            
            foreach ($keys as $key) {
                $stmt->bindValue(":$key", $this->data[$key]);
            }
            $stmt->execute();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                //var_dump($result);
                return TRUE;
            } else {
                throw new Exception("<script type='text/javascript' > alert('Adding Data Failed,please try again (Number of Rows Exception) ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
            //  echo $exc->getMessage();
            throw new Exception("<script type='text/javascript' > alert('Adding Data Failedplease try again  ');history.back();</script>");
        }



       /* $DataValues = '"' . implode($values, '" , "') . '"';
        //if we print it it will be :  "awevarts","jjjj",...
         echo $TableKeys." "."<br>";
          echo $DataValues." "; 

        //لو دخل    /
        //ex: "ahmed","awebartd/"
        //الكويرى مش هتشتغل
        //  echo "<br>".$query."<br>";
        $sql=mysql_query($query) ;//or die($query."<br>".mysql_error());
          if($sql){
          //echo"Adding Data successful";
          return TRUE;
          }
          else {
          throw new Exception(mysql_error()."<script type='text/javascript'>
          alert('Adding Data Failed');history.back();</script>"
          );

          return FALSE;
          }

          //  $DBobject->close();
         */
    }

}
