<?php header("Access-Control-Allow-Origin: *");

$hostname = null;
$username = "root";
$password = "IamDispatch18!";
$database = "fleetr";
$port = null;
$socket = "/cloudsql/fleetr-208415:us-east4:fleetr";

$conn = new mysqli($hostname, $username, $password, $database, $port, $socket);

if ($conn->connect_error) {
  echo "no";
}

?>