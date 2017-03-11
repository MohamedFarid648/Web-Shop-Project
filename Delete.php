<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Delete
 *
 * @author AMR
 */
class Delete{
    private $tablename;
    private $id;
     private $pdo;
    //put your code here
    public function __construct($tablename,$code){
        $this->tablename=$tablename;
        $this->id=$code;
    
        //connect DB
   //    $this->DBobject= Database::connect();
           $this->pdo =new PDO("mysql:host=sql201.eb2a.com;dbname=eb2a_17244314_mobile_web_shop", "eb2a_17244314", "01112858168", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //$this->DeleteData();
        //$this->closeDB();
        
    }
    function DeleteData(){
        try {

            $statement = "delete from $this->tablename where id= :id";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':id', $this->id,  PDO::PARAM_INT);
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
        echo $exc->getMessage();} 
        /*
        $query="delete from $this->tablename where id= $this->id";
        
        $sql=  mysql_query($query) or die("<br>".$query."<br>".mysql_error());
        if($sql){
            return TRUE;
        }
        else {
     
            //throw new Exception("Error:Can not excute the query(Deleting)");
    
 }*/
        
    }  
    function DeleteProductData(){
        
         try {

            $statement = "delete from $this->tablename where product_code= :product_code";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':product_code', $this->id,  PDO::PARAM_INT);
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
        echo $exc->getMessage();} 
        /*
        $query="delete from $this->tablename where product_code= $this->id";
        
        $sql=  mysql_query($query) or die($query."<br>".mysql_error());
        if($sql){
            return TRUE;
        }
        else {
     
            throw new Exception("Error:Can not excute the query(Deleting)");
     
 }
       */ 
    }
    function DeleteCustomerProductData($user_email,$product_code){
           
         try {

            $statement = "delete from $this->tablename where id=:id and  product_code= :product_code and customer_email=:user_email";
            $stmt = $this->pdo->prepare($statement);
           $stmt->bindValue(':id', $this->id);
            $stmt->bindValue(':product_code', $product_code);
             $stmt->bindValue(':user_email', $user_email);
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
        } catch (PDOException $exc) {
        echo $exc->getMessage();
        
        } 
        /*
        
        $query="delete from $this->tablename where id=$id and  product_code= $this->id and customer_email='$user_email' ";
        
        $sql=  mysql_query($query) or die($query."<br>".mysql_error());
        if($sql){
            return TRUE;
        }
        else {
     
            throw new Exception("Error:Can not excute the query(Deleting)");
     
 }
   */     
    }

     function DeleteImageURL($image_URL){
          try {

            $statement = "delete from $this->tablename where  product_image= :image_URL";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':image_URL', $image_URL);
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
        echo $exc->getMessage();}
        /*
        $query="delete from $this->tablename where product_image= '$image_URL'";
        
        $sql=  mysql_query($query) or die($query."<br>".mysql_error());
        if($sql){
            return TRUE;
        }
        else {
     
            throw new Exception("Error:Can not excute the query(Deleting)");
     
 }
       */ 
    }
    
        }
 