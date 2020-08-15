
<?php
require_once('functions/get.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rebuild Beirut
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/139668535e.js" crossorigin="anonymous"></script>

  <!-- Mapbox -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />

</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-half-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#map" rel="tooltip" title="Coded with love for our brothers and sisters in Beirut" data-placement="bottom">
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
            <a class="nav-link" href="#coveredBuildings" onclick="scrolltoDown()">
              <p>Sites Covered</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#materialsNeeded" onclick="scrolltoDown()">
              <p>Materials Needed</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrolltoDown()">
              <p>The Team</p>
            </a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons design_app"></i>
              <p>Components</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="./index.html">
                <i class="now-ui-icons business_chart-pie-36"></i> All components
              </a>
              <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
                <i class="now-ui-icons design_bullet-list-67"></i> Documentation
              </a>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link btn btn-neutral" href="https://www.creative-tim.com/product/now-ui-kit-pro" target="_blank">
              <i class="now-ui-icons arrows-1_share-66"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li> -->
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
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/heli.jpg');">
      </div>
      <!-- <div class="container">
        <div class="content-center brand">
          <h1 class="h1-seo">Donate</h1>
          <h3>Donate for a better, stronger Beirut</h3>
          <button class="btn btn-primary btn-round" type="button">
            <i class="now-ui-icons ui-2_favourite-28"></i> Donate Materials
          </button>
        </div>
        <h6 class="category category-absolute">Designed by
          <a href="http://invisionapp.com/" target="_blank">
            <img src="./assets/img/invision-white-slim.png" class="invision-logo" />
          </a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">
            <img src="./assets/img/creative-tim-white-slim2.png" class="creative-tim-logo" />
          </a>.</h6>
      </div> -->
<div id='map'></div>

<div class="goDown" onclick="scrollToDown()">
  <i class="fas fa-long-arrow-alt-down"></i>
</div>

    </div>

    <div class="section section-basic" id="coveredBuildings">
      <div class="container">
        <h3 class="title text-center">Covered Buildings</h3>
        <?php
          $property_listing_data = file_get_contents('functions/data/property_listing.json');
          $pld = json_decode($property_listing_data, true);

          for($i=0;$i<count($pld);$i++){
            $severity_id=$pld[$i]["severity"];
            switch($severity_id){
              case 1:
                $severity = "Moderate";
              break;
              case 2:
                $severity = "Critical";
              break;
            }
            if($property_progress[$i]["nq"]==0){
              $percentage_single_property=0;
            }else{
              $percentage_single_property=floor(($property_progress[$i]["aq"]/$property_progress[$i]["nq"])*100);
            }
            echo "
            <section>
                <div class='container py-3 singlePropertyListing'>
                    <div class='bs-example card horizontal-card'>
                        <div class='row no-gutters'>
                            <div class='col-sm-4 buildingImage' style='background-image:url(./siteImages/building-Sample.jpeg)'></div>
                            <div class='col-sm-8'>
                                <div class='card-body'>
                                    <span class='badge badge-primary btn-outline-dark buildingLabel' type='button'>#". $pld[$i]["property_id"] ."</span>
                                    <span class='badge badge-primary btn-outline-primary buildingLabel' type='button'>". $severity ."</span>
                                    <h4 class='card-title'>". $pld[$i]["property_name"] ."</h4>
                                    <span class='header-border-small'></span>
                                    <p class='card-text'>". substr($pld[$i]["property_description"], 0, 250) ."</p>
                                    <h5 class='card-title'>Progress Status:</h5>
                                    <div class='progress-container'>
                                      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $percentage_single_property ."%'>
                                          <span class='progress-value'>". $percentage_single_property ."%</span>
                                      </div>
                                    </div>
                                    <a href='./property.php?id=". $pld[$i]["property_id"] ."' class='btn btn-primary'>View Site</a>
                                    <button class='btn btn-primary' data-toggle='modal' data-target='#propertyDonation' data-property='?propertyId=". $pld[$i]["property_id"] ."' onClick='addpropertyID(". $pld[$i]["property_id"] .")'>
                                      Donate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ";
          }
          ?>
        </div>
      </div>
    </div>


    <div class="section section-basic" id="materialsNeeded">
      <div class="container">
        <h3 class="title text-center">Materials Needed</h3>
        <h5 class="description text-center">All the materials donated below will be used buy our engineers and architects to renovate all the listed sites.</h5>


        <div class="row cards-container allMaterialsNeeded">

        <?php

          $category_listing_data = file_get_contents('functions/data/category_listing.json');
          $cld = json_decode($category_listing_data, true);

          $material_listing_data = file_get_contents('functions/data/material_listing_categoryAccess.json');
          $mld = json_decode($material_listing_data, true);

          $tablename="material";
          //for loop to list all the categories
          for($i=0;$i<count($cld);$i++){
            $catId=$cld[$i]["category_id"];
            $query = "SELECT * FROM $tablename WHERE material_category = '$catId' ";
            $result = mysqli_query($conn, $query);
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            //GETTING QUANTITY AQUIRED AND NEEDED FOR EACH MATERIAL
            $query2 = "SELECT a.material_id, SUM(a.quantity) as suma, SUM(n.quantity)as sumn FROM materialaquired a ,materialneeded n WHERE a.material_id=n.material_id GROUP BY material_id";
            $result2 = mysqli_query($conn, $query2);
            while($r2 = mysqli_fetch_assoc($result2)) {
              $rows2[$r2["material_id"]] = $r2;
            }


            echo "
            <div class='col-lg-4 col-md-6 col-xs-12'>
            <div class='card'>
              <h4>".$cld[$i]["category_name"]."</h4>
              <span class='header-border-small'></span>";
              //for loop to list all materials for each category
              for($j=0;$j<count($rows);$j++){
                $material_id=$rows[$j]["material_id"];
                $suma=$rows2[$material_id]["suma"];
                $sumn=$rows2[$material_id]["sumn"];
                if($sumn==0){
                  $percentage=0;
                }else{
                  $percentage=floor(($suma/$sumn)*100);
                }
                // print($percentage);
                  echo"
                    <div class='progress-container'>
                      <span class='progress-badge'>".$rows[$j]["material_name"]."</span>
                      <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:".$percentage."%;'>
                          <span class='progress-value'>".$percentage."%</span>
                        </div>
                      </div>
                    </div>";
              };
              echo"
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm'   onClick='getMaterialDonation('Wood')'>
                Donate
              </button>
            </div>
          </div>
            ";
            unset($rows);
          }

        ?>
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Wood</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">
                <span class='progress-badge'>Goal: ". $totalMaterial1Needed ." planks</span>
                <div class='progress'>
                  <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial1 ."%;'>
                    <span class='progress-value'>". $percentageMaterial1 ."%</span>
                  </div>
                </div>
              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm'   onClick="getMaterialDonation('Wood')">
                Donate
              </button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Doors</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">

              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm'   onClick="getMaterialDonation('Doors')">
                Donate
              </button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Window Glass</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">

              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm'   onClick="getMaterialDonation('windowGlass')">
                Donate
              </button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Aluminum Frames</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">

              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm'  onClick="getMaterialDonation('aluminumFrames')">
                Donate
              </button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Locks & Frames</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">

              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm'  onClick="getMaterialDonation('LocksandFrames')">
                Donate
              </button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Cement</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">

              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm' onClick="getMaterialDonation('Cement')">
                Donate
              </button>
            </div>
          </div> -->

        </div>
      </div>
    </div>




    <div class="goUp" onclick="scrollToUp()">
      <i class="fas fa-long-arrow-alt-up"></i>
    </div>

    <div class="modal fade" id="MaterialForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Donate for all sites</h4>
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
              <input type="text" placeholder="Full Name" class="form-control" />
            </div>
            <div class="input-group no-border">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="email" placeholder="Email Address" class="form-control" />
            </div>
            <div class="input-group no-border">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons tech_mobile"></i>
                </span>
              </div>
              <input type="tel" placeholder="Mobile Number" class="form-control" />
            </div>
            <div class="input-group no-border">
            <?php
                require("functions/countries.html");
                ?>
            </div>
            <h4>Wood</h4>
            <span class="header-border-small"></span>
            <div class="input-group no-border">
              <input type="number" placeholder="99999 Needed" class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="propertyDonation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Donate for #000</h4>
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
              <input type="text" placeholder="Full Name" class="form-control" />
            </div>
            <div class="input-group no-border">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="email" placeholder="Email Address" class="form-control" />
            </div>
            <div class="input-group no-border">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons tech_mobile"></i>
                </span>
              </div>
              <input type="tel" placeholder="Mobile Number" class="form-control" />
            </div>
            <div class="input-group no-border">
              <?php
                require("functions/countries.html");
                ?>
            </div>
            <h4>Materials</h4>
            <span class="header-border-small"></span>
            <div class="row">
              <div class="col-6">
                <h5>Wood</h5>
                <div class="input-group no-border">
                  <input type="number" placeholder="1000 Needed" class="form-control" />
                </div>
              </div>
              <div class="col-6">
                <h5>Doors</h5>
                <div class="input-group no-border">
                  <input type="number" placeholder="1000 Needed" class="form-control" />
                </div>
              </div>
              <div class="col-6">
                <h5>Window Glass</h5>
                <div class="input-group no-border">
                  <input type="number" placeholder="1000 Needed" class="form-control" />
                </div>
              </div>
              <div class="col-6">
                <h5>Aluminum Frames</h5>
                <div class="input-group no-border">
                  <input type="number" placeholder="1000 Needed" class="form-control" />
                </div>
              </div>
              <div class="col-6">
                <h5>Locks & Frames</h5>
                <div class="input-group no-border">
                  <input type="number" placeholder="1000 Needed" class="form-control" />
                </div>
              </div>
              <div class="col-6">
                <h5>Cement</h5>
                <div class="input-group no-border">
                  <input type="number" placeholder="1000 Needed" class="form-control" />
                </div>
              </div>
            </div>




          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <!-- <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
          <div class="modal-body">
            <p>Always have an access to your profile</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-neutral">Back</button>
            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> -->



    <!-- <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  -->
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
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDown() {

      // $("html, body").animate({ scrollTop: $(window).height()}, fast, 1000);
      $("html, body").animate({ scrollTop: "900" });

      }

      function scrollToUp() {

        // $("html, body").animate({ scrollTop: $(window).height()}, fast, 1000);
        $("html, body").animate({ scrollTop: "0" });

      }

      function addpropertyID(currentPropertyId) {
           let stateObj = { id: "100" };

           let newURL = "?action=singlePropertyDonation&propertyId=" + currentPropertyId;

           window.history.pushState(stateObj,
                    "Page 2", newURL);
       }

       function getMaterialDonation(material) {
            let stateObj = { id: "100" };

            let newURL = "?action=singleMatrialDonation&materialNamed=" + material;

            console.log(newURL);

            window.history.pushState(stateObj,
                     "Page 2", newURL);
        }

    $(document).ready(function() {

      $(".goUp").hide();

      $(window).scroll(function() {
          if ($(this).scrollTop() > 500) {
              $(".goUp").fadeIn();
           }
          else {
            $(".goUp").fadeOut();
           }
       });

    });
  </script>


  <!-- Map -->
  <script type="text/javascript" src="./map/mapbox.js?version=1163"></script>
</body>

</html>
