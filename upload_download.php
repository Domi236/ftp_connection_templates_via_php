


<?php


// Initialise the connection parameters  
$ftp_server = "10.0.0.250";  
$ftp_username = "Test";  
$ftp_password = "brfjx";  
  
// Create an FTP connection  
$conn = ftp_connect($ftp_server, $port = 33321);  
  
// Login to FTP account using username and password  
$login = ftp_login($conn, $ftp_username, $ftp_password);  
  
// Get the contents of the current directory  
// Change the second parameter if wanting a subdirectories contents  
$files = ftp_nlist($conn, ".");  

$localfile = "localfile.txt";
$server_file = "serverfile.txt";

    // upload file

    upload file
    if (ftp_put($conn, $server_file, $localfile, FTP_ASCII))
    {
    echo "Successfully uploaded $file.";
    }
    else
    {
    echo "Error uploading $file.";
    }

    
    //download file

    if (ftp_get($conn, $local_file, $server_file, FTP_ASCII))
    {
    echo "Successfully written to $local_file.";
    }
        else
    {
    echo "Error downloading $server_file.";
    }
  
// Loop through $files  
foreach ($files as $file) {  

    echo $file."<br />";  
  
}  


?>