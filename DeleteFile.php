<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeleteFile
 *
 * @author galal
 */
class DeleteFile{

    private $file;
    private $value=array();
    
                function __construct($file) {
        if (is_array($file)) {
            $this->file = $file;
        } else {
            throw new Exception("Data must be an array  ^_^");
        }
      //   $this->connect();
    }

    function deleteImage() {

        foreach ($this->file as $value) {
            if (file_exists($value)) {
                unlink($value);
            } else {
                throw new Exception("Your File is not found now  ^_^ ");
            }
        }
        return TRUE;
    }
    function deleteOneImage($oneFile) {//Not Used

        
            if (file_exists($oneFile)) {
                
                unlink($oneFile);
                 return TRUE;
            } else {
                throw new Exception("Your File is not found now  ^_^ ");
            
        }
       
    }

    
    function SelectImageURL() {

        foreach ($this->file as $value) {
            if (file_exists($value)) {
                
               $this->value[]=$value;
               
            } 
            else {
                throw new Exception("Your File is not found now  ^_^ ");
            }
        }
        return $this->value;
    }
}
