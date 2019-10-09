<?php

// Connect and Login to the FTP Server
// At first, connect to the FTP server using ftp_connect() function. Once the FTP connection is created, use ftp_login() function to login to the FTP server by FTP username and password.

// FTP server details
$ftpHost   = '10.0.0.250';
$ftpUsername = 'domi';
$ftpPassword = 'brfjx';

// open an FTP connection
$connId = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

// try to login
if(@ftp_login($connId, $ftpUsername, $ftpPassword)){
    echo "Connected as $ftpUsername@$ftpHost";
}else{
    echo "Couldn't connect as $ftpUsername";
}

// close the connection
// ftp_close($connId);

?>



<?php
// Upload File to the FTP Server
// After logged in to the FTP server, use ftp_put() function to upload file on the server.

// FTP server details
$ftpHost   = '10.0.0.250';
$ftpUsername = 'domi';
$ftpPassword = 'brfjx';

// open an FTP connection
$connId = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

// login to FTP server
$ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

// local & server file path
$localFilePath  = 'localfile.txt';
$remoteFilePath = 'serverfile.txt';

// try to upload file
if(ftp_put($connId, $remoteFilePath, $localFilePath, FTP_ASCII)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "There was an error while uploading $localFilePath";
}

// close the connection
// ftp_close($connId);


?>

<?php
//Download File from the FTP Server
//After logged in to the FTP server, use ftp_get() function to download the file from the server.

// FTP server details
$ftpHost   = '10.0.0.250';
$ftpUsername = 'domi';
$ftpPassword = 'brfjx';

// open an FTP connection
$connId = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

// login to FTP server
$ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

// local & server file path
$localFilePath  = 'localfile.txt';
$remoteFilePath = 'serverfile.txt';

// try to download a file from server
if(ftp_get($connId, $localFilePath, $remoteFilePath, FTP_BINARY)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "There was an error while downloading $localFilePath";
}

// close the connection
// ftp_close($connId);

?>

<?php

//Delete File on the FTP Server
//After logged in to the FTP server, use ftp_delete() function to delete a file on the server. 

// FTP server details
$ftpHost   = '10.0.0.250';
$ftpUsername = 'domi';
$ftpPassword = 'brfjx';

// open an FTP connection
$connId = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

// login to FTP server
$ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

// server file path
$file = 'serverfile.txt';

// try to delete file on server
if(ftp_delete($connId, $file)){
    echo "$file deleted successful";
}else{
    echo "There was an error while deleting $file";
}

// close the connection
// ftp_close($connId);

?>