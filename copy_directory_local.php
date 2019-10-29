
<?php 

$ftpHost   = '212.108.47.16';
$ftpUsername = 'domi';
$ftpPassword = 'brfjx';

// open an FTP connection
$conn_id = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

// $upload = ftp_put($conn_id, $dst_dir."/".$file, $src_dir."/".$file, FTP_BINARY);

if (@ftp_login($conn_id, $ftpUsername, $ftpPassword))
  {
  echo "Connection established.";
  }
else
  {
  echo "Couldn't establish a connection.";
  }

  //get current ftp position dir
  echo ftp_pwd($conn_id);
  
function custom_copy($src, $dst) {  
  
    // open the source directory 
    // $dir = fopen($src, 'r');
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
}  


    // $filename = 'ftp://username:password@hostname/files/path/and/name.txt';
    // $handle = fopen($filename, "r");
    // $contents = fread($handle, filesize($filename));
    // fclose($handle);
    // echo $contents;

  
$src = "C:/xampp/htdocs/img"; 
  
$dst = "C:/xampp/htdocs/dominik_filas_web_production"; 
  
custom_copy($src, $dst); 
  
?> 



<?php 

// https://www.geeksforgeeks.org/copy-the-entire-contents-of-a-directory-to-another-directory-in-php/
  
// function custom_copy($src, $dst) {  
  
//     // open the source directory 
//     $dir = opendir($src);  
  
//     // Make the destination directory if not exist 
//     @mkdir($dst);  
  
//     // Loop through the files in source directory 
//     while( $file = readdir($dir) ) {  
  
//         if (( $file != '.' ) && ( $file != '..' )) {  
//             if ( is_dir($src . '/' . $file) )  
//             {  
  
//                 // Recursively calling custom copy function 
//                 // for sub directory  
//                 custom_copy($src . '/' . $file, $dst . '/' . $file);  
  
//             }  
//             else {  
//                 copy($src . '/' . $file, $dst . '/' . $file);  
//             }  
//         }  
//     }  
  
//     closedir($dir); 
// }  
  
// $src = "C:/xampp/htdocs/img"; 
  
// $dst = "C:/xampp/htdocs/gfg"; 
  
// custom_copy($src, $dst); 
  
// ?> 