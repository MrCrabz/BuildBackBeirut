<?php
  require_once('functions/db.php');

  $property_id = $_GET["id"];

  if(!empty($_POST["full_name"])){
    $fullname=$_POST["full_name"];
    $email=$_POST["email"];
    $mobilenumber=$_POST["mobile_number"];
    $country=$_POST["country"];
    $material_quantity=$_POST["material_quantity"];

    $sql = "INSERT INTO propertydonation (property_id, `name`, phone, email, `location`, `date`, donation_status) VALUES ('$property_id', '$fullname', '$mobilenumber', '$email', '$country', NOW(), 1)";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM propertydonation ORDER BY property_donation_id DESC LIMIT 1";
    $query_result = mysqli_query($conn, $sql);
    while($record = mysqli_fetch_assoc($query_result)) {
      $latest[] = $record;
    }
    $property_donation_id=$latest[0]["property_donation_id"];
    foreach($material_quantity as $mat_id => $mat_quantity){
      $sql = "INSERT INTO multipropertydonation (material_id, property_donation_id, quantity) VALUES ('$mat_id','$property_donation_id','$mat_quantity')";
      mysqli_query($conn, $sql);

    }
      // print_r($material_quantity);

  }
  //QUERY TO GET THIS SPECIFIC PROPERTY DATA
    $query = "SELECT * FROM property WHERE property_id = '$property_id' ";
    $query_result = mysqli_query($conn, $query);
    while($record = mysqli_fetch_assoc($query_result)) {
        $property_data[] = $record;
    }
    $property_data=$property_data[0];
    $property_name=$property_data["property_name"];
    $property_description=$property_data["property_description"];
    $property_longitude=$property_data["longitude"];
    $property_latitude=$property_data["latitude"];
    $property_severity=$property_data["severity"];

  //QUERY TO GET CATEGORY LISTING WITH SUM N A
    $query = "SELECT p.property_id, c.category_id, c.category_name,
    SUM(n.quantity) as sumn, SUM(a.quantity) as suma FROM materialcategory c, material m, materialneeded n, materialaquired a, property p
    WHERE p.property_id=a.property_id AND p.property_id=n.property_id AND m.material_id=a.material_id AND m.material_id= n.material_id
    AND c.category_id=m.material_category AND n.quantity<>0 AND p.property_id='$property_id'
    GROUP BY c.category_id,p.property_id";

    $query_result = mysqli_query($conn, $query);
    while($record = mysqli_fetch_assoc($query_result)) {
        $category_listing_data[] = $record;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $property_name ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="./plugins/fresco/dist/js/fresco.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./plugins/fresco/dist/css/fresco.css"/>

</head>
<body class="profile-page sidebar-collapse singleProperty">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <!-- <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div> -->
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php#map" rel="tooltip" title="Coded with love for our brothers and sisters in Beirut" data-placement="bottom">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 457.52 573.85"><defs><style>.cls-1{fill:#993636;}</style></defs><path class="cls-1" d="M311.31,568.12q0-71.81,0-143.61c.06-81.85,53.7-148.49,133.62-166,91.26-20.05,185,44.15,199,135.92a191.41,191.41,0,0,1-2.6,72.55c-1.42,6.16-.94,9.16,6.19,11.82,62.18,23.19,102.34,67.3,116.88,131.85,21.21,94.09-35.7,186.19-129.15,211.5a183,183,0,0,1-44.94,6c-55.45.73-110.92.46-166.39.37-63.07-.1-112.41-49.49-112.55-112.65C311.21,666.61,311.3,617.36,311.31,568.12ZM506.94,751.47v.25c26,0,52,.33,78-.17a117.52,117.52,0,0,0,28.6-3.72c51.23-14.05,82.09-58.81,78-112.18-3.45-45-40-85.11-84.52-92.36-3.11-.51-7.57.55-9.82,2.6-35.61,32.53-78.73,48-125.21,56.42-17.11,3.08-34.62,5.52-50.9,11.22-20,7-31.7,22.33-31.88,44.58q-.24,29.67,0,59.34a36.3,36.3,0,0,0,1.89,11.48c5,14.25,17.16,22.38,33.75,22.49C452.19,751.59,479.56,751.47,506.94,751.47ZM389.47,539.75c16.47-3.82,32.23-7.76,48.11-11.08,19.54-4.08,39.55-6.28,58.7-11.66,51.29-14.41,81.21-61.55,72.11-111.53-8-43.8-49.37-76.49-93.3-73.69-45.92,2.92-84.41,41.14-85.54,86.42-1,39.06-.47,78.16-.59,117.24A30.25,30.25,0,0,0,389.47,539.75Z" transform="translate(-311.27 -254.79)"/><circle class="cls-1" cx="165.98" cy="171.54" r="37.97"/></svg>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php#coveredBuildings" onclick="scrolltoDown()">
              <p>Sites Covered</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#materialsNeeded" onclick="scrolltoDown()">
              <p>Materials Needed</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#theTeam" onclick="scrolltoDown()">
              <p>The Team</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./siteImages/building-Sample.jpeg');">
      </div>
      <div class="container text-left">
        <!-- <div class="photo-container">
          <img src="./assets/img/ryan.jpg" alt="">
        </div> -->
        <?php
        $sumn=0;
        $suma=0;
        for($i=0;$i<count($category_listing_data);$i++){
          $sumn+=$category_listing_data[$i]["sumn"];
          $suma+=$category_listing_data[$i]["suma"];
        }
        $percentage_single_property = floor(($suma/$sumn)*100);
        switch($property_severity){
          case 1:
            $propertySituation = "Moderate";
          break;
          case 2:
            $propertySituation = "Critical";
          break;
        }


        echo "<h3 class='title'>" . "<div class='singlePropertyId singlePropertyMeta'>#" . $property_id . "</div><div class='singlePropertySituation singlePropertyMeta'>" . $propertySituation . "</div><br>" .$property_name . "</h3>
              <p class='category'>Site Progress:</p>
              <div class='text-center progressProperty'>
                <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $percentage_single_property ."%;'>
                  <span class='progress-value'>". $percentage_single_property ."%</span>
                </div>
              </div>
        ";
        ?>
        <!-- <div class="content">
          <div class="social-description">
            <h2>26</h2>
            <p>Wood</p>
          </div>
          <div class="social-description">
            <h2>26</h2>
            <p>Doors</p>
          </div>
          <div class="social-description">
            <h2>48</h2>
            <p>Glass</p>
          </div>
        </div> -->
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <button class='btn btn-primary btn-round btn-lg' data-toggle='modal' data-target='#propertyDonation'>
            Donate Materials
          </button>
          <a href="#mapSite" class="btn btn-primary btn-round btn-lg additionalButton">
            <i class="now-ui-icons location_pin"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-lg-8 col-xs-12">

            <div class="propertySection">

              <div class="sectionTitle">
                <h3 class="title text-left">About the site</h3>
                <span class='header-border-small'></span>
              </div>

              <h5 class="description text-left">
                <?php echo $property_description ?>
              </h5>
            </div>


            <div class="propertySection">

              <div class="sectionTitle">
                <h3 class="title text-left">Volunteers on site</h3>
                <span class='header-border-small'></span>
              </div>


              <div class="voluntersList">

                <div class="singleVolunteerModule">
                  <img src="./assets/img/ryan.jpg" alt="" class="volunteerImage">
                  <div class="volunteerInfo">
                    <h4 class="volunteerName">Ryan Reynolds</h4>
                    <p class="volunteerJob">Architect</p>
                  </div>
                  <a href="tel:+96100000000" class="volunteerNumber ">
                    <i class="now-ui-icons tech_mobile"></i>
                  </a>
                </div>

                <div class="singleVolunteerModule">
                  <img src="./assets/img/ryan.jpg" alt="" class="volunteerImage">
                  <div class="volunteerInfo">
                    <h4 class="volunteerName">Ryan Reynolds</h4>
                    <p class="volunteerJob">Cleaning</p>
                  </div>
                  <a href="tel:+96100000000" class="volunteerNumber ">
                    <i class="now-ui-icons tech_mobile"></i>
                  </a>
                </div>

                <div class="singleVolunteerModule">
                  <img src="./assets/img/ryan.jpg" alt="" class="volunteerImage">
                  <div class="volunteerInfo">
                    <h4 class="volunteerName">Ryan Reynolds</h4>
                    <p class="volunteerJob">Civil Engineer</p>
                  </div>
                  <a href="tel:+96100000000" class="volunteerNumber ">
                    <i class="now-ui-icons tech_mobile"></i>
                  </a>
                </div>

              </div>
            </div>

            <div class="propertySection">

              <div class="sectionTitle">
                <h3 class="title text-left">Images</h3>
                <span class='header-border-small'></span>
              </div>

                <div class="col-md-12 ml-auto mr-auto">
                  <div class="row collections">
                    <div class="col-md-6">
                      <a href="./assets/img/bg3.jpg" class="fresco" data-fresco-group="shared_options">
                        <img src="./assets/img/bg3.jpg" alt="" class="img-raised fresco">
                      </a>
                      <a href="./assets/img/bg8.jpg" class="fresco" data-fresco-group="shared_options">
                        <img src="./assets/img/bg8.jpg" alt="" class="img-raised fresco">
                      </a>
                    </div>
                    <div class="col-md-6">
                      <a href="./assets/img/bg3.jpg" class="fresco" data-fresco-group="shared_options">
                        <img src="./assets/img/bg3.jpg" alt="" class="img-raised fresco">
                      </a>
                      <a href="./assets/img/bg7.jpg" class="fresco" data-fresco-group="shared_options">
                        <img src="./assets/img/bg6.jpg" alt="" class="img-raised fresco">
                      </a>
                    </div>
                  </div>
                </div>
            </div>

          </div>
          <div class="col-lg-4 col-xs-12">

            <div class="sectionTitle">
              <h3 class="title text-left">Materials Needed</h3>
              <span class='header-border-small'></span>
            </div>

            <div class = "container">


        <div class='panel-group' id='accordion'>

          <!-- end container -->
            <?php

              //for loop to list all the categories
              for($i=0;$i<count($category_listing_data);$i++){
                $category_id=$category_listing_data[$i]["category_id"];
                $category_name=$category_listing_data[$i]["category_name"];

                $category_needed=$category_listing_data[$i]["sumn"];
                $category_aquired=$category_listing_data[$i]["suma"];
                $category_percentage= floor(($category_aquired/$category_needed)*100);

                //QUERY TO GET EACH MATERIALS' NEEDED AND AQUIRED
                $query = "SELECT p.property_id,c.category_id, c.category_name, m.material_id, m.material_name, n.quantity
                as needed_quantity, a.quantity as aquired_quantity
                FROM property p, materialcategory c, material m, materialneeded n, materialaquired a
                WHERE c.category_id=m.material_category AND m.material_id=n.material_id AND m.material_id=a.material_id AND p.property_id=n.property_id
                AND p.property_id=a.property_id AND n.quantity<>0 AND p.property_id='$property_id' AND c.category_id='$category_id'";

                $query_result = mysqli_query($conn, $query);
                while($record = mysqli_fetch_assoc($query_result)) {
                    $material_property_data[] = $record;
                }



                echo "
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                    <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#". str_replace(' ', '',$category_name) ."'>
                      ". $category_name . "<span class='motherCategoryPercentage'>" . $category_percentage . "%</span>
                      <i class='now-ui-icons arrows-1_minimal-down'></i>
                    </a>
                  </h4>
                </div>
                <div id='". str_replace(' ', '',$category_name) ."' class='panel-collapse collapse'>
                ";

                // echo "
                // <br>
                // <div class='progress-container'>
                // ";


                for($j=0;$j<count($material_property_data);$j++){

                  $material_id=$material_property_data[$j]["material_id"];
                  $material_name=$material_property_data[$j]["material_name"];
                  $needed_quantity=$material_property_data[$j]["needed_quantity"];
                  $aquired_quantity=$material_property_data[$j]["aquired_quantity"];
                  $progress=floor(($aquired_quantity/$needed_quantity)*100);

                  echo "
                    <div class='progress-container'>
                      <span class='progress-badge'>".$material_name."</span>
                      <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:".$progress."%;'>
                          <span class='progress-value'>".$progress."%</span>
                        </div>
                      </div>
                    </div>

                  ";
                }
                unset($material_property_data);
                echo "</div>";
              }
            ?>
            </div>

            </div>
          </div>

        </div>

      </div>
    </div>

    <div id='mapSite' class="listingMap" style='width: 100%; height: 60vh;'></div>

    <?php
      echo"
      <form action='property.php?id=".$property_id."' method='POST'>
      ";
      ?>
      <div class="modal fade" id="propertyDonation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <h4 class="title title-up">Donate for #<?php echo $property_id ?></h4>
            </div>
            <div class="modal-body">
              <h4>Your Info</h4>
              <span class="header-border-small"></span>
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_single-02"></i>
                  </span>
                </div>
                <input type="text" placeholder="Full Name" class="form-control" name="full_name"/>
              </div>
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </span>
                </div>
                <input type="email" placeholder="Email Address" class="form-control" name="email"/>
              </div>
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons tech_mobile"></i>
                  </span>
                </div>
                <input type="tel" placeholder="Mobile Number" class="form-control" name="mobile_number"/>
              </div>
              <div class="input-group no-border">
              <?php
                  require("functions/countries.html");
                  ?>
              </div>


              <h4>Materials</h4>
              <span class="header-border-small"></span>
              <?php
                for($i=0;$i<count($category_listing_data);$i++){
                  $category_id=$category_listing_data[$i]["category_id"];
                  $category_name=$category_listing_data[$i]["category_name"];

                  $query = "SELECT p.property_id,c.category_id, c.category_name, m.material_id, m.material_name, n.quantity as needed_quantity, a.quantity as aquired_quantity FROM property p, materialcategory c, material m, materialneeded n, materialaquired a WHERE c.category_id=m.material_category AND m.material_id=n.material_id AND m.material_id=a.material_id AND p.property_id=n.property_id AND p.property_id=a.property_id AND n.quantity<>0 AND p.property_id='$property_id' AND c.category_id='$category_id'";
                    $query_result = mysqli_query($conn, $query);
                    while($record = mysqli_fetch_assoc($query_result)) {
                        $material_property_data[] = $record;
                    }
                    echo"
                    <div class='row'>
                      <div class='col-6'>
                        <h5>".$category_name."</h5>
                        ";
                        for($j=0;$j<count($material_property_data);$j++){
                          $material_name=$material_property_data[$j]["material_name"];
                          $needed_quantity=$material_property_data[$j]["needed_quantity"];
                          $aquired_quantity=$material_property_data[$j]["aquired_quantity"];
                          echo "
                          <h6>".$material_name."</h6>
                          <div class='input-group no-border'>
                            <input type='number' placeholder='".$needed_quantity."' name='material_quantity[".$material_id."]' class='form-control' />
                          </div>
                          ";
                          }
                      echo "
                      </div>
                    </div>
                    ";
                    unset($material_property_data);
                }


              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit"></input>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="goUp" onclick="scrollToUp()">
      <i class="fas fa-long-arrow-alt-up"></i>
    </div>
    <!-- <footer class="footer footer-default">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="#">
                Sites Covered
              </a>
            </li>
            <li>
              <a href="#">
                Materials Needed
              </a>
            </li>
            <li>
              <a href="#">
                The Team
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed with
          <a href="#" target="_blank">Love</a>. Coded by
          <a href="#" target="_blank"></a>.
        </div>
      </div>
    </footer> -->
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iaW5nZWFnZWEiLCJhIjoiY2tkbmZ5NnN6MWhnMDJzcm9sOW15NmZlbSJ9.yjhyjQzprYOcVmB4UMri5A';
    var map = new mapboxgl.Map({
      container: 'mapSite',
      style: 'mapbox://styles/robingeagea/cjqu4vv0915my2rmhm8lcl1vh',
      center: <?php

      echo "[" .  $property_latitude . "," .  $property_longitude. "]";

      ?>,
      zoom: 17
    });

    var geojson = {
      type: 'FeatureCollection',
      features: [{
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [<?php echo $property_latitude . "," .  $property_longitude ?>]
        }
      }]
    };

    geojson.features.forEach(function(marker) {

      // create a HTML element for each feature
      var el = document.createElement('div');
      el.className = 'marker';

      // make a marker for each feature and add to the map
      new mapboxgl.Marker(el)
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);
      });

    $(window).scroll(function() {

      if($('.navbar').hasClass('navbar-half-transparent')){
        $('.navbar').removeClass('navbar-half-transparent');
        $('.navbar').addClass('navbar-transparent');
      }

      $('.navbar').removeClass('navbar-half-transparent');
      $('.navbar').removeClass('navbar-primary');
      $('.navbar').addClass('navbar-transparent');
        if ($(this).scrollTop() > 400) {
          $('.navbar').removeClass('navbar-half-transparent');
          $('.navbar').removeClass('navbar-transparent');
          $('.navbar').addClass('navbar-primary');
         }
        else {
          $('.navbar').removeClass('navbar-primary');
          $('.navbar').removeClass('navbar-half-transparent');
          $('.navbar').addClass('navbar-transparent');
         }
     });

     function scrollToUp() {

       // $("html, body").animate({ scrollTop: $(window).height()}, fast, 1000);
       $("html, body").animate({ scrollTop: "0" });

     }
  </script>
</body>
</html>
