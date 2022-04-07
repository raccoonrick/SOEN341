<?php
/*
--------------------------CONFIG FILE--------------------------
Change credentials depending on personal settings and where your database is stored
*/
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'id18628315_root');
// define('DB_PASSWORD', '$&5/kB-7{&2l%=yA');
// define('DB_NAME', '');
 
$servername = "localhost";
$username = "id18628315_root";
$password = "$&5/kB-7{&2l%=yA";
$database = "id18628315_localroot";
/* Attempt to connect to MySQL database */
$link = new mysqli($servername, $username, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
// echo "Connected successfully";
?>