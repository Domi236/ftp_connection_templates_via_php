<?php

$ftp_server = "212.108.47.16";

$ftp_username = 'Test';
$ftp_userpass = 'brfjx';

//$port = 33321;

// stelle eine Verbindung her
$ftp_conn = ftp_connect($ftp_server, $port = 33321) or die("Konnte keine Verbindung zu $ftp_server aufbauen");


if (@ftp_login($ftp_conn, $ftp_username, $ftp_userpass))
  {
  echo "Connection established.";
  }
else
  {
  echo "Couldn't establish a connection.";
  }

$dir = "dominik_filas_web_production";

  // try to create directory $dir
if (ftp_mkdir($ftp_conn, $dir))
{
echo "Successfully created $dir";
}
else
{
echo "Error while creating $dir";
}

// do something...

// close connection
ftp_close($ftp_conn);


?> 