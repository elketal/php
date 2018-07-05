<?php header("Access-Control-Allow-Origin: *");

require ('connection.php');

$sql = "select * from location v inner join truck_load l on v.location_id = l.pickup_location_id where l.pickup_start_date ="; 
$sql .= "(select max(n.pickup_start_date) from truck_load n where n.trucker_id = l.trucker_id)";

$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc())
{
	$data[] = $row;
}

echo json_encode($data);

?>