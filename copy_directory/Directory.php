<?php

class Directory2 {

    static function copy_directory( $src, $dst) {
  
        // open the source directory
        $dir = opendir($src);  
      
        // Make the destination directory if not exist 
        @mkdir($dst);  
      
        // Loop through the files in source directory 
        while( $file = readdir($dir) ) {  
            echo $file;
            
      
            if (( $file != '.' ) && ( $file != '..' )) {  
                if ( is_dir($src . '/' . $file) )  
                {  
                    // Recursively calling custom copy function 
                    // for sub directory  
                    custom_copy($src . '/' . $file, $dst . '/' . $file);  
                    echo 'dist created custom';
      
                }  
                else {  
                    copy($src . '/' . $file, $dst . '/' . $file);  
                    echo 'dist created';
                }  
            }  
        }  
      
        closedir($dir);
        return;
    }  
} 

$get_copy = new Directory2();
$get_copy->copy_directory('C:/xampp/htdocs/img', 'C:/xampp/htdocs/dominik_filas_web_production');

