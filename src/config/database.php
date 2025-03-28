<?php   

// Settings database
$host = 'localhost';
$port = '5432';
$dbname = 'petstore';
$username = 'postgres';
$password = 'unicesmag';

// Connection string
$data_connection = "
    host=$host
    port=$port
    dbname=$dbname
    user=$username
    password=$password
";

$conn = pg_connect($data_connection);

if (!$conn) {
    echo "Connection failed: ";
} else {
    echo "Connected successfully";
}



?>