<?php
define ('DB_HOST', 'localhost');
define ('DB_NAME' ,'Project');
define ('DB_USERNAME', 'shaif');
define ('DB_PASSWORD', '12345');

$conn = mysqli_connect('localhost', 'shaif', '12345', 'Project');

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


?>