<?php header("Access-Control-Allow-Origin: *");

require ('connection.php');

$result=$conn->query('select * from fleetr.employee');
$data = array();
while ($row = $result->fetch_assoc())
{
	$data[] = $row;
}

echo json_encode($data);

?>