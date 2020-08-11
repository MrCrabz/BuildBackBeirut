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

$s="{\"type\":\"FeatureCollection\",\"features\":[";

for($i=0;$i<count($data1);$i++){
  $s=$s."{\"type\":\"Feature\",\"geometry\":{\"type\":\"Point\",\"coordinates\":[". $data1[$i]["latitude"] .",". $data1[$i]["longitude"] ."]},\"properties\":{\"title\":\"". $data1[$i]["property_name"] ."\",\"description\":\"". $data1[$i]["property_id"] ."\"}},";
  }
  $s[strlen($s)-1]="]";
  $s[strlen($s)]="}";

file_put_contents('./map/properties.geojson', $s);
?>
