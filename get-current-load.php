<?php header("Access-Control-Allow-Origin: *");

require ('connection.php');

$sql = "select * from truck_load l1 where l1.pickup_start_date = (select max(l2.pickup_start_date) from truck_load l2 where l2.trucker_id = l1.trucker_id)";

$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc())
{
	$data[] = $row;
}

echo json_encode($data);

?>

