// Used to add response headers like Cross-Origin Resource Sharing and some allowed methods like POST & GET
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// Credentials used to connect to MySQL database
define('DB_HOST', 'localhost');
define('DB_USER', 'rodney');
define('DB_PASS', '12345');
define('DB_NAME', '');

// allows creation of a connection to the database using mysqli connection
function connect()
{
  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

  if (mysqli_connect_errno($connect)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}

$con = connect();