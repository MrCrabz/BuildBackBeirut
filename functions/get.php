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


//GETTING EACH PROPERTY PROGRESS
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


?>
