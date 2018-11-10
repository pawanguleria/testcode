<?php

/**
 * Transfer (Export) Files Server to Server using PHP FTP
 * @link https://shellcreeper.com/?p=1249
 */
 
/* Remote File Name and Path */
//$remote_file = 'xyz.jpg';
 
/* FTP Account (Remote Server) */
$ftp_host = 'sportskarnataka.in'; /* host */
$ftp_user_name = 'j18719sp'; /* username */
$ftp_user_pass = 'YEBqjxvHniRoVc'; /* password */
 
 
/* File and path to send to remote FTP server */
$local_file = 'profile.jpg';
 
 $remote_file = '/public_html/xyz.jpg';

/* Connect using basic FTP */
$connect_it = ftp_connect( $ftp_host );
 
/* Login to FTP */
$login_result = ftp_login( $connect_it, $ftp_user_name, $ftp_user_pass );
 
/* Send $local_file to FTP */
if ( ftp_put( $connect_it, $remote_file, $local_file, FTP_BINARY ) ) {
    echo "WOOT! Successfully transfer $local_file\n";
}
else {
    echo "Doh! There was a problem\n";
}
 
/* Close the connection */
ftp_close( $connect_it );

?>


$connection = ftp_connect($server);

$login = ftp_login($connection, $ftp_user_name, $ftp_user_pass);

if (!$connection || !$login) { die('Connection attempt failed!'); }

$upload = ftp_put($connection, $dest, $source, $mode);

if (!$upload) { echo 'FTP upload failed!'; }

ftp_close($connection);