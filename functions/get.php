<?php
require_once('db.php');

//GET PROPERTIES
  $query = "SELECT * FROM property";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $row1[] = $r;
      $properties_list[$r["property_id"]] = $r;
  }
  $encoded_data=json_encode($row1);
  file_put_contents('functions/data/property_listing.json', $encoded_data);

  $encoded_data=json_encode($properties_list);
  file_put_contents('functions/data/property_listing_idAccess.json', $encoded_data);
  unset($row1);
  unset($row2);
//GET MATERIALS

  $query = "SELECT * FROM material";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $row1[] = $r;
      $row2[$r["material_category"]] = $r;
  }
  $encoded_data=json_encode($row1);
  file_put_contents('functions/data/material_listing.json', $encoded_data);

  $encoded_data=json_encode($row2);
  file_put_contents('functions/data/material_listing_categoryAccess.json', $encoded_data);
  unset($row1);
  unset($row2);
//GET CATEGORIES
  $query = "SELECT * FROM materialcategory";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $row1[] = $r;
      $row2[$r["category_id"]] = $r;
  }
  $encoded_data=json_encode($row1);
  file_put_contents('functions/data/category_listing.json', $encoded_data);

  $encoded_data=json_encode($row2);
  file_put_contents('functions/data/category_listing_idAccess.json', $encoded_data);
  unset($row1);
  unset($row2);
//GET STATUS
  $query = "SELECT * FROM propertystatus";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $row1[] = $r;
      $row2[$r["status_id"]] = $r;
  }
  $encoded_data=json_encode($row1);
  file_put_contents('functions/data/status_listing.json', $encoded_data);

  $encoded_data=json_encode($row2);
  file_put_contents('functions/data/status_listing_idAccess.json', $encoded_data);
  unset($row1);
  unset($row2);
//GET MATERIALS NEEDED
  $query = "SELECT * FROM materialneeded";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $row1[] = $r;
      $row2[$r["material_id"]] = $r;
  }
  $encoded_data=json_encode($row1);
  file_put_contents('functions/data/materialneeded_listing.json', $encoded_data);

  $encoded_data=json_encode($row2);
  file_put_contents('functions/data/materialneeded_listing_idAccess.json', $encoded_data);
  unset($row1);
  unset($row2);
//GET MATERIALS AQUIRED
  // $query = "SELECT * FROM materialaquired";
  // $result = mysqli_query($conn, $query);

  // while($r = mysqli_fetch_assoc($result)) {
  //     $row1[] = $r;
  //     $row2[$r["material_id"]] = $r;
  // }
  // $encoded_data=json_encode($row1);
  // file_put_contents('functions/data/materialaquired_listing.json', $encoded_data);


  // $encoded_data=json_encode($row2);
  // file_put_contents('functions/data/materialaquired_listing_idAccess.json', $encoded_data);
  // unset($row1);
  // unset($row2);





// print($rows[0]["material_1_acquired"]);
// $data = json_encode($rows);
// echo $data;

//GETTING EACH PROPERTY PROGRESS
$material_counter=0;
  $query = "SELECT * FROM property";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $row1[] = $r;
  }

  $query = "SELECT p.property_id ,SUM(n.quantity) as nq, SUM(a.quantity) as aq FROM materialneeded n ,materialaquired a, property p WHERE p.property_id=n.property_id AND p.property_id=a.property_id AND a.material_id=n.material_id GROUP BY p.property_id";
  $result = mysqli_query($conn, $query);

  while($r = mysqli_fetch_assoc($result)) {
      $property_progress[] = $r;
      $test[$r["property_id"]] = $r;
  }
  $encoded_data=json_encode($test);
  file_put_contents('functions/data/test.json', $encoded_data);
//  print_r($property_progress);

  // print_r($prop_prog);

  // $jsonn=json_encode($prop_prog);
  // print($jsonn);
// }
// $data1 = json_decode($data,true);

$s="{\"type\":\"FeatureCollection\",\"features\":[";

for($i=0;$i<count($property_progress);$i++){
  // print($property_progress[$i]["aq"]);
  // print($property_progress[$i]["nq"]);
  if($property_progress[$i]["nq"]==0){
    $percentage_single_property=0;
  }else{
    $percentage_single_property=floor(($property_progress[$i]["aq"]/$property_progress[$i]["nq"])*100);
  }
  $property_listing_data = file_get_contents('functions/data/property_listing.json');
  $pld = json_decode($property_listing_data, true);
  // if($property_progress[$i]["an"]==0){
  //   $percentage=0;
  // }else{
  //   $percentage=floor(($property_progress[$i]["aq"]/$property_progress[$i]["an"])*100);
  // }
  $s=$s."{
    \"type\":\"Feature\",
    \"geometry\":{\"type\":\"Point\",
      \"coordinates\":[". $pld[$i]["latitude"] .",
      ". $pld[$i]["longitude"] ."]},
      \"properties\":{\"id\":\"". $pld[$i]["property_id"] ."\",
        \"percentageCompleted\":\"". $percentage_single_property ."\",
        \"description\":\"". $pld[$i]["property_id"] ."\"}},";
}
$s[strlen($s)-1]="]";
$s[strlen($s)]="}";

file_put_contents('./map/properties.geojson', $s);

//   $m1n = $data1[$i]["material_1_needed"];
//   $m1a=$data1[$i]["material_1_acquired"];
//   $m2n=$data1[$i]["material_2_needed"];
//   $m2a=$data1[$i]["material_2_acquired"];
//   $m3n=$data1[$i]["material_3_needed"];
//   $m3a=$data1[$i]["material_3_acquired"];
//   $m4n=$data1[$i]["material_4_needed"];
//   $m4a=$data1[$i]["material_4_acquired"];
//   $m5n=$data1[$i]["material_5_needed"];
//   $m5a=$data1[$i]["material_5_acquired"];
//   $m6n=$data1[$i]["material_6_needed"];
//   $m6a=$data1[$i]["material_6_acquired"];

//   $m1p=floor(($m1a/$m1n)*100);
//   $m2p=floor(($m2a/$m2n)*100);
//   $m3p=floor(($m3a/$m3n)*100);
//   $m4p=floor(($m4a/$m4n)*100);
//   $m5p=floor(($m5a/$m5n)*100);
//   $m6p=floor(($m6a/$m6n)*100);

//   $totalPercentage = floor(($m1p+$m2p+$m3p+$m4p+$m5p+$m6p)/6);




?>
