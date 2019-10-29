<?php

// $ftpHost   = '212.108.47.16';
// $ftpUsername = 'domi';
// $ftpPassword = 'brfjx';

// $conn_id = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

// if (@ftp_login($conn_id, $ftpUsername, $ftpPassword)) {
//   echo "Connection established.";
// }
// else {
//   echo "Couldn't establish a connection.";
// }

// $local_file = "C:/xampp/htdocs/local.zip";
// $server_file = "ftp://domi@212.108.47.16:33321/server.zip";

// // download server file
// if (ftp_get($conn_id, $local_file, $server_file, FTP_ASCII))
//   {
//   echo "Successfully written to $local_file.";
//   }
// else {
//   echo "Error downloading $server_file.";
// }

// // close connection
// ftp_close($conn_id);



$ftpHost   = '212.108.47.16';
$ftpUsername = 'domi';
$ftpPassword = 'brfjx';

$conn_id = ftp_connect($ftpHost, $port = 33321) or die("Couldn't connect to $ftpHost");

if (ftp_login($conn_id, $ftpUsername, $ftpPassword))
  {
  echo "Connection established.";
  }
else
  {
  echo "Couldn't establish a connection.";
  }

$src_dir = "C:/xampp/htdocs/dominik_filas_web_production";
$dst_dir = 'ftp://domi@212.108.47.16:33321/work';

ftp_copy($src_dir, $dst_dir);

function ftp_copy($src_dir, $dst_dir) {

global $conn_id;

$d = dir($src_dir);

    while($file = $d->read()) {
        echo $file;

        if ($file != "." && $file != "..") {

            if (is_dir($src_dir."/".$file)) {

                if (!ftp_chdir($conn_id, $dst_dir."/".$file)) {

                ftp_mkdir($conn_id, $dst_dir."/".$file);
                }

            ftp_copy($src_dir."/".$file, $dst_dir."/".$file);
            }
            else {

            $upload = ftp_put($conn_id, $dst_dir."/".$file, $src_dir."/".$file, FTP_BINARY);
            }
        }

    }
$d->close();
}

?>