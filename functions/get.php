<?php
require_once('db.php');

$query = "SELECT * FROM property";
$result = mysqli_query($conn, $query);

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
// print($rows[0]["material_1_acquired"]);
$data = json_encode($rows);
// echo $data;

$data1 = json_decode($data,true);

// $material1a=$data1[0]["material_1_acquired"];
// $material1n=$data1[0]["material_1_needed"];

// print($material1a);
// print($material1n);

// $r=$material1a/$material1n;
// echo"<br>";
// print($r);



// echo count($data1);
// print_r($data1);
// print($data1[0]["property_id"]);

?>