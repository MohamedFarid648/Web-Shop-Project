<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author galal
 *//*  $rules=array("username"=>"checkRequired|checkString",
  "useremail"=>"checkRequired|checkEmail");

  } */
class Validator {

    function validate($data, $rules) {
        $valid = TRUE;
        foreach ($rules as $key => $rule) {
            //$key=username,useremail,password,tell
            //$rule=checkRequired|checkString|...()function names with (|)
            //Extract rules
            $callsback = explode("|", $rule);
            //$callsback=checkRequired,checkString,...()function names with not (|)
            //var_dump($callsback);
            foreach ($callsback as $calback) {
                // echo "<br>" . $calback . "<br>";
                if (isset($data[$key])) {
                    $value = $data[$key];
                    //  $value='mhamed','mohamedgalal9454@gmail.com','0Mkjuy123','24935624'
                } else {
                    $value = NULL;
                }
                //$value=isset($data[$key])?$data[$key]:NULL;

                if (is_array($value)) {
                    foreach ($value as $val) {
                        //echo $calback($val, $key);
                        if ($this->$calback($val, $key) == FALSE) {
                            //$callsback($val, $key)=checkString("mhmed","username")

                            $valid = FALSE;
                        }
                    }
                } else {
                    if ($this->$calback($value, $key) == FALSE) {
                        $valid = FALSE;
                    }
                }
            }//end of  foreach ($callsback as $calback)
        }//end of foreach ($rules as $key => $rule)
        return $valid;
    }

    function checkString($value, $key) {

        $valid = TRUE;
        $pattern = '/^[-a-zA-Zأ-ي0-9_\x{30A0}-\x{30FF}'
                . '\x{3040}-\x{309F}\x{4E00}-\x{9FBF}\s]*$/u';
        $validate = preg_match($pattern, $value);
        //return true or false if $value like the $pattern or not
        if ($validate == FALSE) {
            //  throw new Exception("The Name must be a String");
            echo '<script type="text/javascript" > '
            . 'alert("The Name must be a  valid String");history.back();</script>';
            die();
            //$key==name or user name(column name)
        } else {
            return $validate;
        }
    }

    function checkEmail($value, $key) {
        //$pattern="[a-zA-Z][a-zA-Z0-9]*[@]{a-zA-Z]*[.][a-zA-Z]*";
        $validate = filter_var($value, FILTER_VALIDATE_EMAIL);
        if ($validate) {
            return $validate;
        } else {
            // throw new Exception("The Email must be an Email");
            echo '<script type="text/javascript" > '
            . 'alert("The Email must be a  valid Email");history.back();</script>';
            die();
            //$key==useremail(column name)
        }
    }

    function checkURL($value, $key) {

        $validate = filter_var($value, FILTER_VALIDATE_URL);
        if ($validate) {
            return $validate;
        } else {
            //  throw new Exception("The URL must be an URL");
            echo '<script type="text/javascript" > '
            . 'alert("The URL must be a  valid URL");history.back();</script>';
            die();
        }
    }

    function checkIP($value, $key) {

        $validate = filter_var($value, FILTER_VALIDATE_IP);
        if ($validate) {
            return $validate;
        } else {
            //  throw new Exception("The $key must be an IP");
            echo '<script type="text/javascript" > '
            . 'alert("The IP must be a  valid IP");history.back();</script>';
            die();
        }
    }

    function checkINT($value, $key) {

        $validate = filter_var($value, FILTER_VALIDATE_INT);
        if ($validate) {
            return $validate;
        } else {
            // throw new Exception("The $key must be an Integer");
            echo '<script type="text/javascript" > '
            . 'alert("The Number must be avalid Integer Number");history.back();</script>';

            die();
        }
    }

    function checkFloat($value, $key) {

        $validate = filter_var($value, FILTER_VALIDATE_FLOAT);
        if ($validate) {
            return $validate;
        } else {
            // throw new Exception("The $key must be an Integer");
            echo '<script type="text/javascript" > '
            . 'alert("Your Number must be a valid  Number");history.back();</script>';
            die();
        }
    }

    function checkRequired($value, $key) {

        $validate = !empty($value);
        if ($validate) {
            return $validate;
        } else {
            //   throw new Exception("The $key is Required");
            echo '<script type="text/javascript" > '
            . 'alert("The input field is Required");history.back();</script>';
            die();
        }
    }

    function santization($value, $key) {//santization=التطهير
        $flag = NULL;
        $filter;
        switch ($key) {
            case 'email':
                $filter = FILTER_SANITIZE_EMAIL;
                $value = substr($value, 0, 255);
                break;
            case 'url':
                $filter = FILTER_SANITIZE_URL;
                break;
            case 'int':
                $filter = FILTER_SANITIZE_NUMBER_INT;
                break;



            default:
                $filter = FILTER_SANITIZE_STRING;
                $flag = FILTER_FLAG_NO_ENCODE_QUOTES;
                break;
        }
        $validate = filter_var($value, $filter, $flag);
        if ($validate == FALSE) {
            throw new Exception("The $key must is not validate");
        }
        return $validate;
        echo $validate;
    }

}
