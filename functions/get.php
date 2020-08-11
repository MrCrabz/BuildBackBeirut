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

  $m1n = $data1[$i]["material_1_needed"];
  $m1a=$data1[$i]["material_1_acquired"];
  $m2n=$data1[$i]["material_2_needed"];
  $m2a=$data1[$i]["material_2_acquired"];
  $m3n=$data1[$i]["material_3_needed"];
  $m3a=$data1[$i]["material_3_acquired"];
  $m4n=$data1[$i]["material_4_needed"];
  $m4a=$data1[$i]["material_4_acquired"];
  $m5n=$data1[$i]["material_5_needed"];
  $m5a=$data1[$i]["material_5_acquired"];
  $m6n=$data1[$i]["material_6_needed"];
  $m6a=$data1[$i]["material_6_acquired"];

  $m1p=floor(($m1a/$m1n)*100);
  $m2p=floor(($m2a/$m2n)*100);
  $m3p=floor(($m3a/$m3n)*100);
  $m4p=floor(($m4a/$m4n)*100);
  $m5p=floor(($m5a/$m5n)*100);
  $m6p=floor(($m6a/$m6n)*100);

  $totalPercentage = floor(($m1p+$m2p+$m3p+$m4p+$m5p+$m6p)/6);

  $s=$s."{
    \"type\":\"Feature\",
    \"geometry\":{\"type\":\"Point\",
      \"coordinates\":[". $data1[$i]["latitude"] .",
      ". $data1[$i]["longitude"] ."]},
      \"properties\":{\"id\":\"". $data1[$i]["property_id"] ."\",
        \"percentageCompleted\":\"". $totalPercentage ."\",
        \"description\":\"". $data1[$i]["property_id"] ."\"}},";
  }
  $s[strlen($s)-1]="]";
  $s[strlen($s)]="}";

file_put_contents('./map/properties.geojson', $s);
?>
