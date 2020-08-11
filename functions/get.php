<?php
require_once('db.php');

$query = "SELECT * FROM property";
$result = mysqli_query($conn, $query);
// $string='{';

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    $rows1[$r["property_id"]] = $r;
}
// $string[strlen($string)-1]='}';


$property_listing=json_encode($rows1);
file_put_contents('property_listing.json', $property_listing);

// print($rows[0]["material_1_acquired"]);
$data = json_encode($rows);
// echo $data;

$data1 = json_decode($data,true);


?>
