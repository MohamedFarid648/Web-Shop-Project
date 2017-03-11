<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Display
 *
 * @author AMR
 */
class Display {

    //put your code here
    //While: To return one Row
    //For:Multiple Rows

    private $tablename;
     private $pdo;
    private $recData;

    public function __construct($tablename) {


        $this->tablename = $tablename;
        //$this->connectToDB();
       //connect DB
       try{
           $this->pdo =new PDO("mysql:host=sql201.eb2a.com;dbname=eb2a_17244314_mobile_web_shop", "eb2a_17244314", "01112858168", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       }
        catch( Exception $e ) {
    echo "We can't Connect to our Server ,please try again later ^_^ <br>Exception: {$e->getMessage()}";
}
        //include 'Database.php';
        // $this->DBobject= Database::connect();
        //  $this->closeDB();//لو شلنا الكومنت واشتغلت هيطلع ايرور ان الفاريبول مش موجود لانه ساعتها هيكون قفل الكونيكشن
    }

    function DisplayLastData($id) {
            try {

            $statement = "SELECT * FROM `$this->tablename` where `product_code`=:id DESC limit 1";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
       /* // $this->recData;
        // $query="SELECT * FROM `$this->tablename` ORDER BY `$this->tablename`.`product_code` DESC limit 1";//
        $query = "SELECT * FROM `$this->tablename` where `product_code`=$id "; //
        //desc: علشان يجيب الداتا تنازليا
        //limit1:   علشان يجيب اخر واحد  
        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            // throw new Exception ("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            while ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                // $this->recData= \mysql_fetch_array($sql);
                $result = \mysql_fetch_array($sql);

                $num--;
            }
            return $result; //رجع الارا دى
            // $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }*/
    }

    function DisplayAllData() {
           try {

            $statement = "SELECT * FROM `$this->tablename` ";
            $stmt = $this->pdo->prepare($statement);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        /*
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename` "; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            // throw new Exception ("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                } return $result; //رجع الارا دى
            }

            //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }

        // return $this->recData;//رجع الارا دى
//if i write it here it will be undefined
    }*/
    }     
    function DisplayLastProducts($num) {
          try {

            $statement = "SELECT * FROM `$this->tablename`ORDER BY `id` DESC limit $num";
            $stmt = $this->pdo->prepare($statement);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               throw new Exception("");
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
   
    /*
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC limit 3"; // ORDER BY `Num` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            // throw new Exception ("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                } return $result; //رجع الارا دى
            }

            //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }

        // return $this->recData;//رجع الارا دى
//if i write it here it will be undefined*/
    }

    function DisplayAllDataByUsrType($user_type) {
        try {

            $statement = "SELECT * FROM `$this->tablename` where UserType=:user_type";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':user_type', $user_type,  PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        
      /*  // $this->recData;
        $query = "SELECT * FROM `$this->tablename` where UserType=$user_type"; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            // throw new Exception ("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                }
                return $result; //رجع الارا دى
            }
            /* return $this->recData;
             * if you write it here and there is no results:
             * Website will say:(Undefined variable: result in
             *  C:\xampp\htdocs\NewSWProject\modols\Display.php on line 126
             * )
             * 
             * 
             * //رجع الارا دى 
            //     $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
      

        // return $this->recData;//رجع الارا دى
//if i write it here it will be undefined
       */
        
    }
    function  DisplayLastDataByUsrType($user_type){
        
          try {

            $statement = "SELECT * FROM `$this->tablename` where UserType=:user_type ORDER BY `id` DESC limit 6";
            $stmt = @$this->pdo->prepare($statement);
            $stmt->bindValue(':user_type', $user_type,  PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        
        
    }
                function DisplayAllProductByCompanyEmail($c_email) {
        try {

            $statement = "SELECT * FROM `$this->tablename` where c_mail=:c_mail";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':c_mail', $c_email);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
         
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        /*
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename`  where c_mail='$c_email' "; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            throw new Exception("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                }
                return $result; //رجع الارا دى
            }

            //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }

        // return $this->recData;//رجع الارا دى
//if i write it here it will be undefined
   */
        
        
        }

    function DisplaySpecialProduct($product_code) {
        try {

            $statement = "SELECT * FROM `$this->tablename` where `product_code`=:product_code";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':product_code', $product_code,  PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        /*
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename`  where product_code= $product_code"; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            // throw new Exception ("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            while ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                $result = \mysql_fetch_array($sql);

                $num--;
            }
            return $result; //رجع الارا دى
            // $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }*/
    }

    function DisplaySpecialuser($user_email) {
        try {

            $statement = "SELECT * FROM `$this->tablename` where user_email=:user_email";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':user_email', $user_email);
            $stmt->execute();
            $result = $stmt->fetch();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        // $this->recData;
    /*    $query = "SELECT * FROM `$this->tablename`  where user_email= '$user_email' "; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            throw new Exception("Error :can't Display Last Data ");
        }
        /*  else{//Doesn't return any thing because it return multiple rows
          //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
          $num=mysql_num_rows($sql);
          $num=mysql_num_rows($sql);
          if($num>0){
          //لو عدد الصفوف اكبر من واحد جطهم فى اراى
          for($i=0;$i<$num;$i++){
          $this->recData[$i]=mysql_fetch_array($sql);
          //if the table has 5 record
          //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
          //$this->recData[1]=second record(...)
          //...
          }
          return $this->recData;//رجع الارا دى
          }
          }
         */
        //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
       /* else {

            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            while ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                $result = \mysql_fetch_array($sql);

                $num--;
            }
            return $result; //رجع الارا دى
            // $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }*/
    }

    function DisplaySpecialUser_File($user_email) {
         try {

            $statement = "SELECT * FROM `$this->tablename` where user_email=:user_email";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':user_email', $user_email);
            $stmt->execute();
            $result = $stmt->fetch();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();}
        /*
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename`  where user_email= '$user_email' "; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            throw new Exception("Error :can't Display Last Data ");
        } else {//Doesn't return any thing because it return multiple rows
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                }
                return $result; //رجع الارا دى
            }
        }

        //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        /* else{//While will return one row 

          //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
          $num=mysql_num_rows($sql);
          while($num>0){
          //لو عدد الصفوف اكبر من واحد جطهم فى اراى
          $this->recData= mysql_fetch_array($sql);
          $num--;
          }
          return $this->recData;//رجع الارا دى
          // $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص


          } */
    }

    function DisplayCustomerProducts($user_email) {
 try {

            $statement = "SELECT * FROM `$this->tablename` where customer_email=:user_email";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':user_email', $user_email);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();} 
        /*
// $this->recData;
        // $query="SELECT user.user_email,product.name,product.price,product.c_mail FROM `customer_product`,`user`,`product`  where user.user_email= '$user_email' and user.user_email=customer_product.customer_email and product.product_code=customer_product.product_code ";// ORDER BY `$this->tablename`.`id` DESC
        
        $query = "SELECT * FROM `$this->tablename` WHERE customer_email='$user_email' ";

        $sql = mysql_query($query) or die($query . "<br>" . mysql_error());

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            // throw new Exception ("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                }
                return $result; //رجع الارا دى
            }

            //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }

        // return $this->recData;//رجع الارا دى
//if i write it here it will be undefined
    }

    function DisplaySpecialFile($id) {
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename`  where id= $id"; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query)or die("<br>" . $query . "<br>" . mysql_error());

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            //   throw new Exception ("Error :can't Display DisplaySpecialFile  Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            while ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                $result = \mysql_fetch_array($sql);

                $num--;
            }
            return $result; //رجع الارا دى
            // $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }*/
    }

    function DisplayCustomersOfSpecialCompany($c_email) {
         try {

            $statement = "SELECT * FROM `$this->tablename` where company_email=:c_email";
            $stmt = $this->pdo->prepare($statement);
            $stmt->bindValue(':c_email', $c_email);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rowCount = $stmt->rowCount();
            // var_dump($result);
            if ($rowCount > 0) {
                     //var_dump($result);
                return $result;
            } else {
               // throw new Exception("<script type='text/javascript' > alert(' ');history.back();</script>");
                return FALSE;
            }
        } catch (Exception $exc) {
        echo $exc->getMessage();} 
        /*
        // $this->recData;
        $query = "SELECT * FROM `$this->tablename`  where company_email='$c_email' "; // ORDER BY `$this->tablename`.`id` DESC


        $sql = mysql_query($query);

        if (!$sql) {
            //لو جملة الكويرى غلط تعال هنا
            throw new Exception("Error :can't Display Last Data ");
        } else {
            //لو جملة الكويرى صح شوف عدد الصفوف اللى رجعت
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                //لو عدد الصفوف اكبر من واحد جطهم فى اراى
                for ($i = 0; $i < $num; $i++) {
                    $result[$i] = mysql_fetch_array($sql);
                    //if the table has 5 record
                    //$this->recData[0]=first record(id=1,name=,statues=,location=,...)
                    //$this->recData[1]=second record(...)
                    //...
                }
                return $result; //رجع الارا دى
            }

            //   $this->closeDB();//هقفل الكونيكشن بعد ما بعت الاراى خلاص
        }

        // return $this->recData;//رجع الارا دى
//if i write it here it will be undefined
         * */
         
    }

}
