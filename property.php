<?php
require_once('functions/db.php');
$property_id = $_GET["id"];
$property_listing_data = file_get_contents('property_listing.json');
$jdata = json_decode($property_listing_data, true);
$m1n=$jdata[$property_id]["material_1_needed"];
$m1a=$jdata[$property_id]["material_1_acquired"];
$m2n=$jdata[$property_id]["material_2_needed"];
$m2a=$jdata[$property_id]["material_2_acquired"];
$m3n=$jdata[$property_id]["material_3_needed"];
$m3a=$jdata[$property_id]["material_3_acquired"];
$m4n=$jdata[$property_id]["material_4_needed"];
$m4a=$jdata[$property_id]["material_4_acquired"];
$m5n=$jdata[$property_id]["material_5_needed"];
$m5a=$jdata[$property_id]["material_5_acquired"];
$m6n=$jdata[$property_id]["material_6_needed"];
$m6a=$jdata[$property_id]["material_6_acquired"];

$siteDesc = $jdata[$property_id]["property_description"];

$m1p=floor(($m1a/$m1n)*100);
$m2p=floor(($m2a/$m2n)*100);
$m3p=floor(($m3a/$m3n)*100);
$m4p=floor(($m4a/$m4n)*100);
$m5p=floor(($m5a/$m5n)*100);
$m6p=floor(($m6a/$m6n)*100);

$totalPercentage = floor(($m1p+$m2p+$m3p+$m4p+$m5p+$m6p)/6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $jdata[$property_id]["property_name"] ?>
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
        <a class="navbar-brand" href="#map" rel="tooltip" title="Coded with love for our brothers and sisters in Beirut" data-placement="bottom" target="_blank">
          Rebuild Beirut
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
      <div class="container">
        <!-- <div class="photo-container">
          <img src="./assets/img/ryan.jpg" alt="">
        </div> -->
        <?php
        echo "<h3 class='title'>".$jdata[$property_id]["property_name"]."</h3>
              <p class='category'>Site Progress:</p>
              <div class='text-cemter progressProperty'>
                <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $totalPercentage ."%;'>
                  <span class='progress-value'>". $totalPercentage ."%</span>
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
          <a href="#button" class="btn btn-primary btn-round btn-lg">Donate Materials</a>
          <!-- <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
            <i class="fab fa-instagram"></i>
          </a> -->
        </div>
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <h3 class="title text-left">About The Site</h3>
            <h5 class="description text-left">
              <?php echo $siteDesc ?>
            </h5>
            <div id='mapSite' style='width: 100%; height: 300px;'></div>
          </div>
          <div class="col-lg-6 col-xs-12">
            <h3 class="title text-left">Materials Needed</h3>
            <div class="progress-container">
              <?php
                echo "
                  <span class='progress-badge'>Goal: ". $m1n ." Bag </span><br>
                  <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $m1p ."%;'>
                      <span class='progress-value'>". $m1p ."%</span>
                    </div>
                  </div>
                ";
              ?>
            </div>
            <div class="progress-container">
            <?php
                echo "
                  <span class='progress-badge'>Goal: ". $m2n ." Bag </span><br>
                  <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $m2p ."%;'>
                      <span class='progress-value'>". $m2p ."%</span>
                    </div>
                  </div>
                ";
              ?>
            </div>
            <div class="progress-container">
            <?php
                echo "
                  <span class='progress-badge'>Goal: ". $m3n ." Bag </span><br>
                  <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $m3p ."%;'>
                      <span class='progress-value'>". $m3p ."%</span>
                    </div>
                  </div>
                ";
              ?>
            </div>
            <div class="progress-container">
            <?php
                echo "
                  <span class='progress-badge'>Goal: ". $m4n ." Bag </span><br>
                  <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $m4p ."%;'>
                      <span class='progress-value'>". $m4p ."%</span>
                    </div>
                  </div>
                ";
              ?>
            </div>
            <div class="progress-container">
            <?php
                echo "
                  <span class='progress-badge'>Goal: ". $m5n ." Bag </span><br>
                  <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $m5p ."%;'>
                      <span class='progress-value'>". $m5p ."%</span>
                    </div>
                  </div>
                ";
              ?>
            </div>
            <div class="progress-container">
            <?php
                echo "
                  <span class='progress-badge'>Goal: ". $m6n ." Bag </span><br>
                  <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $m6p ."%;'>
                      <span class='progress-value'>". $m6p ."%</span>
                    </div>
                  </div>
                ";
              ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <h3 class="title text-left">Images Of The Site</h3>
            <br>
            <div class="tab-pane" id="propertyImages" role="tabpanel">
              <div class="col-md-12 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="./assets/img/bg6.jpg" class="img-raised">
                    <img src="./assets/img/bg11.jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="./assets/img/bg7.jpg" alt="" class="img-raised">
                    <img src="./assets/img/bg8.jpg" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Tab panes -->
        </div>
      </div>
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
      style: 'mapbox://styles/robingeagea/ckdlc70gv1z5z1imwitqyd11s',
      center: [35.5113866,33.8950144],
      zoom: 17
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
  </script>
</body>
</html>
