
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
        <a class="navbar-brand" href="#map" rel="tooltip" title="Coded with love for our brothers and sisters in Beirut" data-placement="bottom" target="_blank">
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
        //initiation for adding the total of each material material
          $totalMaterial1Needed=0;
          $totalMaterial1Acquired=0;
          $totalMaterial2Needed=0;
          $totalMaterial2Acquired=0;
          $totalMaterial3Needed=0;
          $totalMaterial3Acquired=0;
          $totalMaterial4Needed=0;
          $totalMaterial4Acquired=0;
          $totalMaterial5Needed=0;
          $totalMaterial5Acquired=0;
          $totalMaterial6Needed=0;
          $totalMaterial6Acquired=0;

          for($i=0;$i<count($data1);$i++){
            $material1a=$data1[$i]["material_1_acquired"];
            $material1n=$data1[$i]["material_1_needed"];
            $material2a=$data1[$i]["material_2_acquired"];
            $material2n=$data1[$i]["material_2_needed"];
            $material3a=$data1[$i]["material_3_acquired"];
            $material3n=$data1[$i]["material_3_needed"];
            $material4a=$data1[$i]["material_4_acquired"];
            $material4n=$data1[$i]["material_4_needed"];
            $material5a=$data1[$i]["material_5_acquired"];
            $material5n=$data1[$i]["material_5_needed"];
            $material6a=$data1[$i]["material_6_acquired"];
            $material6n=$data1[$i]["material_6_needed"];
            $progress=($material1a/$material1n)+($material2a/$material2n)+($material3a/$material3n)+($material4a/$material4n)+($material5a/$material5n)+($material6a/$material6n);
            $progressPercentage=floor(($progress/6)*100);

            //adding the total of exh material needed
            $totalMaterial1Needed=$totalMaterial1Needed+$material1n;
            $totalMaterial1Acquired=$totalMaterial1Acquired+$material1a;
            $totalMaterial2Needed=$totalMaterial2Needed+$material2n;
            $totalMaterial2Acquired=$totalMaterial2Acquired+$material2a;
            $totalMaterial3Needed=$totalMaterial3Needed+$material3n;
            $totalMaterial3Acquired=$totalMaterial3Acquired+$material3a;
            $totalMaterial4Needed=$totalMaterial4Needed+$material4n;
            $totalMaterial4Acquired=$totalMaterial4Acquired+$material4a;
            $totalMaterial5Needed=$totalMaterial5Needed+$material5n;
            $totalMaterial5Acquired=$totalMaterial5Acquired+$material5a;
            $totalMaterial6Needed=$totalMaterial6Needed+$material6n;
            $totalMaterial6Acquired=$totalMaterial6Acquired+$material6a;



            echo "
            <section>
                <div class='container py-3'>
                    <div class='bs-example card horizontal-card'>
                        <div class='row no-gutters'>
                            <div class='col-sm-4 buildingImage' style='background-image:url(./siteImages/building-Sample.jpeg)'></div>
                            <div class='col-sm-8'>
                                <div class='card-body'>
                                    <span class='badge badge-primary btn-outline-dark buildingLabel' type='button'>#". $data1[$i]["property_id"] ."</span>
                                    <span class='badge badge-primary btn-outline-primary buildingLabel' type='button'>Critical</span>
                                    <h4 class='card-title'>". $data1[$i]["property_name"] ."</h4>
                                    <span class='header-border-small'></span>
                                    <p class='card-text'>". $data1[$i]["property_description"] ."</p>
                                    <h5 class='card-title'>Progress Status:</h5>
                                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: ". $progressPercentage ."%'>
                                        <span class='progress-value'>". $progressPercentage ."%</span>
                                    </div>
                                    <a href='./property.php?id=". $data1[$i]["property_id"] ."' class='btn btn-primary'>View Site</a>
                                    <button class='btn btn-primary' data-toggle='modal' data-target='#propertyDonation' data-property='?propertyId=". $data1[$i]["property_id"] ."' onClick='addpropertyID(". $data1[$i]["property_id"] .")'>
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
          //percentages of each material total acquired
          $percentageMaterial1 = floor($totalMaterial1Acquired / $totalMaterial1Needed * 100);
          $percentageMaterial2 = floor($totalMaterial2Acquired / $totalMaterial2Needed * 100);
          $percentageMaterial3 = floor($totalMaterial3Acquired / $totalMaterial3Needed * 100);
          $percentageMaterial4 = floor($totalMaterial4Acquired / $totalMaterial4Needed * 100);
          $percentageMaterial5 = floor($totalMaterial5Acquired / $totalMaterial5Needed * 100);
          $percentageMaterial6 = floor($totalMaterial6Acquired / $totalMaterial6Needed * 100);
          ?>

        </div>
      </div>
    </div>


    <div class="section section-basic" id="materialsNeeded">
      <div class="container">
        <h3 class="title text-center">Materials Needed</h3>
        <h5 class="description text-center">All the materials donated below will be used buy our engineers and architects to renovate all the listed sites.</h5>


        <div class="row cards-container allMaterialsNeeded">

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <h4>Wood</h4>
              <span class="header-border-small"></span>
              <div class="progress-container">
                <?php
                  echo "
                    <span class='progress-badge'>Goal: ". $totalMaterial1Needed ." planks</span>
                    <div class='progress'>
                      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial1 ."%;'>
                        <span class='progress-value'>". $percentageMaterial1 ."%</span>
                      </div>
                    </div>
                  ";
                ?>
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
                <?php
                    echo "
                      <span class='progress-badge'>Goal: ". $totalMaterial2Needed ." doors</span>
                      <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial2 ."%;'>
                          <span class='progress-value'>". $percentageMaterial2 ."%</span>
                        </div>
                      </div>
                    ";
                  ?>
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
                <?php
                      echo "
                        <span class='progress-badge'>Goal: ". $totalMaterial3Needed ." 2x2 glass</span>
                        <div class='progress'>
                          <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial3 ."%;'>
                            <span class='progress-value'>". $percentageMaterial3 ."%</span>
                          </div>
                        </div>
                      ";
                    ?>
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
              <?php
                    echo "
                      <span class='progress-badge'>Goal: ". $totalMaterial4Needed ." frames</span>
                      <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial4 ."%;'>
                          <span class='progress-value'>". $percentageMaterial4 ."%</span>
                        </div>
                      </div>
                    ";
                  ?>
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
              <?php
                    echo "
                      <span class='progress-badge'>Goal: ". $totalMaterial5Needed ." lock</span>
                      <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial5 ."%;'>
                          <span class='progress-value'>". $percentageMaterial5 ."%</span>
                        </div>
                      </div>
                    ";
                  ?>
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
              <?php
                    echo "
                      <span class='progress-badge'>Goal: ". $totalMaterial6Needed ." bags</span>
                      <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:". $percentageMaterial6 ."%;'>
                          <span class='progress-value'>". $percentageMaterial6 ."%</span>
                        </div>
                      </div>
                    ";
                  ?>
              </div>
              <button class='btn btn-primary' data-toggle='modal' data-target='#MaterialForm' onClick="getMaterialDonation('Cement')">
                Donate
              </button>
            </div>
          </div>

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
              <select id="country" name="country" class="form-control">
                 <option value="Afganistan">Afghanistan</option>
                 <option value="Albania">Albania</option>
                 <option value="Algeria">Algeria</option>
                 <option value="American Samoa">American Samoa</option>
                 <option value="Andorra">Andorra</option>
                 <option value="Angola">Angola</option>
                 <option value="Anguilla">Anguilla</option>
                 <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                 <option value="Argentina">Argentina</option>
                 <option value="Armenia">Armenia</option>
                 <option value="Aruba">Aruba</option>
                 <option value="Australia">Australia</option>
                 <option value="Austria">Austria</option>
                 <option value="Azerbaijan">Azerbaijan</option>
                 <option value="Bahamas">Bahamas</option>
                 <option value="Bahrain">Bahrain</option>
                 <option value="Bangladesh">Bangladesh</option>
                 <option value="Barbados">Barbados</option>
                 <option value="Belarus">Belarus</option>
                 <option value="Belgium">Belgium</option>
                 <option value="Belize">Belize</option>
                 <option value="Benin">Benin</option>
                 <option value="Bermuda">Bermuda</option>
                 <option value="Bhutan">Bhutan</option>
                 <option value="Bolivia">Bolivia</option>
                 <option value="Bonaire">Bonaire</option>
                 <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                 <option value="Botswana">Botswana</option>
                 <option value="Brazil">Brazil</option>
                 <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                 <option value="Brunei">Brunei</option>
                 <option value="Bulgaria">Bulgaria</option>
                 <option value="Burkina Faso">Burkina Faso</option>
                 <option value="Burundi">Burundi</option>
                 <option value="Cambodia">Cambodia</option>
                 <option value="Cameroon">Cameroon</option>
                 <option value="Canada">Canada</option>
                 <option value="Canary Islands">Canary Islands</option>
                 <option value="Cape Verde">Cape Verde</option>
                 <option value="Cayman Islands">Cayman Islands</option>
                 <option value="Central African Republic">Central African Republic</option>
                 <option value="Chad">Chad</option>
                 <option value="Channel Islands">Channel Islands</option>
                 <option value="Chile">Chile</option>
                 <option value="China">China</option>
                 <option value="Christmas Island">Christmas Island</option>
                 <option value="Cocos Island">Cocos Island</option>
                 <option value="Colombia">Colombia</option>
                 <option value="Comoros">Comoros</option>
                 <option value="Congo">Congo</option>
                 <option value="Cook Islands">Cook Islands</option>
                 <option value="Costa Rica">Costa Rica</option>
                 <option value="Cote DIvoire">Cote DIvoire</option>
                 <option value="Croatia">Croatia</option>
                 <option value="Cuba">Cuba</option>
                 <option value="Curaco">Curacao</option>
                 <option value="Cyprus">Cyprus</option>
                 <option value="Czech Republic">Czech Republic</option>
                 <option value="Denmark">Denmark</option>
                 <option value="Djibouti">Djibouti</option>
                 <option value="Dominica">Dominica</option>
                 <option value="Dominican Republic">Dominican Republic</option>
                 <option value="East Timor">East Timor</option>
                 <option value="Ecuador">Ecuador</option>
                 <option value="Egypt">Egypt</option>
                 <option value="El Salvador">El Salvador</option>
                 <option value="Equatorial Guinea">Equatorial Guinea</option>
                 <option value="Eritrea">Eritrea</option>
                 <option value="Estonia">Estonia</option>
                 <option value="Ethiopia">Ethiopia</option>
                 <option value="Falkland Islands">Falkland Islands</option>
                 <option value="Faroe Islands">Faroe Islands</option>
                 <option value="Fiji">Fiji</option>
                 <option value="Finland">Finland</option>
                 <option value="France">France</option>
                 <option value="French Guiana">French Guiana</option>
                 <option value="French Polynesia">French Polynesia</option>
                 <option value="French Southern Ter">French Southern Ter</option>
                 <option value="Gabon">Gabon</option>
                 <option value="Gambia">Gambia</option>
                 <option value="Georgia">Georgia</option>
                 <option value="Germany">Germany</option>
                 <option value="Ghana">Ghana</option>
                 <option value="Gibraltar">Gibraltar</option>
                 <option value="Great Britain">Great Britain</option>
                 <option value="Greece">Greece</option>
                 <option value="Greenland">Greenland</option>
                 <option value="Grenada">Grenada</option>
                 <option value="Guadeloupe">Guadeloupe</option>
                 <option value="Guam">Guam</option>
                 <option value="Guatemala">Guatemala</option>
                 <option value="Guinea">Guinea</option>
                 <option value="Guyana">Guyana</option>
                 <option value="Haiti">Haiti</option>
                 <option value="Hawaii">Hawaii</option>
                 <option value="Honduras">Honduras</option>
                 <option value="Hong Kong">Hong Kong</option>
                 <option value="Hungary">Hungary</option>
                 <option value="Iceland">Iceland</option>
                 <option value="Indonesia">Indonesia</option>
                 <option value="India">India</option>
                 <option value="Iran">Iran</option>
                 <option value="Iraq">Iraq</option>
                 <option value="Ireland">Ireland</option>
                 <option value="Isle of Man">Isle of Man</option>
                 <option value="Israel">Israel</option>
                 <option value="Italy">Italy</option>
                 <option value="Jamaica">Jamaica</option>
                 <option value="Japan">Japan</option>
                 <option value="Jordan">Jordan</option>
                 <option value="Kazakhstan">Kazakhstan</option>
                 <option value="Kenya">Kenya</option>
                 <option value="Kiribati">Kiribati</option>
                 <option value="Korea North">Korea North</option>
                 <option value="Korea Sout">Korea South</option>
                 <option value="Kuwait">Kuwait</option>
                 <option value="Kyrgyzstan">Kyrgyzstan</option>
                 <option value="Laos">Laos</option>
                 <option value="Latvia">Latvia</option>
                 <option value="Lebanon" selected>Lebanon</option>
                 <option value="Lesotho">Lesotho</option>
                 <option value="Liberia">Liberia</option>
                 <option value="Libya">Libya</option>
                 <option value="Liechtenstein">Liechtenstein</option>
                 <option value="Lithuania">Lithuania</option>
                 <option value="Luxembourg">Luxembourg</option>
                 <option value="Macau">Macau</option>
                 <option value="Macedonia">Macedonia</option>
                 <option value="Madagascar">Madagascar</option>
                 <option value="Malaysia">Malaysia</option>
                 <option value="Malawi">Malawi</option>
                 <option value="Maldives">Maldives</option>
                 <option value="Mali">Mali</option>
                 <option value="Malta">Malta</option>
                 <option value="Marshall Islands">Marshall Islands</option>
                 <option value="Martinique">Martinique</option>
                 <option value="Mauritania">Mauritania</option>
                 <option value="Mauritius">Mauritius</option>
                 <option value="Mayotte">Mayotte</option>
                 <option value="Mexico">Mexico</option>
                 <option value="Midway Islands">Midway Islands</option>
                 <option value="Moldova">Moldova</option>
                 <option value="Monaco">Monaco</option>
                 <option value="Mongolia">Mongolia</option>
                 <option value="Montserrat">Montserrat</option>
                 <option value="Morocco">Morocco</option>
                 <option value="Mozambique">Mozambique</option>
                 <option value="Myanmar">Myanmar</option>
                 <option value="Nambia">Nambia</option>
                 <option value="Nauru">Nauru</option>
                 <option value="Nepal">Nepal</option>
                 <option value="Netherland Antilles">Netherland Antilles</option>
                 <option value="Netherlands">Netherlands (Holland, Europe)</option>
                 <option value="Nevis">Nevis</option>
                 <option value="New Caledonia">New Caledonia</option>
                 <option value="New Zealand">New Zealand</option>
                 <option value="Nicaragua">Nicaragua</option>
                 <option value="Niger">Niger</option>
                 <option value="Nigeria">Nigeria</option>
                 <option value="Niue">Niue</option>
                 <option value="Norfolk Island">Norfolk Island</option>
                 <option value="Norway">Norway</option>
                 <option value="Oman">Oman</option>
                 <option value="Pakistan">Pakistan</option>
                 <option value="Palau Island">Palau Island</option>
                 <option value="Palestine">Palestine</option>
                 <option value="Panama">Panama</option>
                 <option value="Papua New Guinea">Papua New Guinea</option>
                 <option value="Paraguay">Paraguay</option>
                 <option value="Peru">Peru</option>
                 <option value="Phillipines">Philippines</option>
                 <option value="Pitcairn Island">Pitcairn Island</option>
                 <option value="Poland">Poland</option>
                 <option value="Portugal">Portugal</option>
                 <option value="Puerto Rico">Puerto Rico</option>
                 <option value="Qatar">Qatar</option>
                 <option value="Republic of Montenegro">Republic of Montenegro</option>
                 <option value="Republic of Serbia">Republic of Serbia</option>
                 <option value="Reunion">Reunion</option>
                 <option value="Romania">Romania</option>
                 <option value="Russia">Russia</option>
                 <option value="Rwanda">Rwanda</option>
                 <option value="St Barthelemy">St Barthelemy</option>
                 <option value="St Eustatius">St Eustatius</option>
                 <option value="St Helena">St Helena</option>
                 <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                 <option value="St Lucia">St Lucia</option>
                 <option value="St Maarten">St Maarten</option>
                 <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                 <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                 <option value="Saipan">Saipan</option>
                 <option value="Samoa">Samoa</option>
                 <option value="Samoa American">Samoa American</option>
                 <option value="San Marino">San Marino</option>
                 <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                 <option value="Saudi Arabia">Saudi Arabia</option>
                 <option value="Senegal">Senegal</option>
                 <option value="Seychelles">Seychelles</option>
                 <option value="Sierra Leone">Sierra Leone</option>
                 <option value="Singapore">Singapore</option>
                 <option value="Slovakia">Slovakia</option>
                 <option value="Slovenia">Slovenia</option>
                 <option value="Solomon Islands">Solomon Islands</option>
                 <option value="Somalia">Somalia</option>
                 <option value="South Africa">South Africa</option>
                 <option value="Spain">Spain</option>
                 <option value="Sri Lanka">Sri Lanka</option>
                 <option value="Sudan">Sudan</option>
                 <option value="Suriname">Suriname</option>
                 <option value="Swaziland">Swaziland</option>
                 <option value="Sweden">Sweden</option>
                 <option value="Switzerland">Switzerland</option>
                 <option value="Syria">Syria</option>
                 <option value="Tahiti">Tahiti</option>
                 <option value="Taiwan">Taiwan</option>
                 <option value="Tajikistan">Tajikistan</option>
                 <option value="Tanzania">Tanzania</option>
                 <option value="Thailand">Thailand</option>
                 <option value="Togo">Togo</option>
                 <option value="Tokelau">Tokelau</option>
                 <option value="Tonga">Tonga</option>
                 <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                 <option value="Tunisia">Tunisia</option>
                 <option value="Turkey">Turkey</option>
                 <option value="Turkmenistan">Turkmenistan</option>
                 <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                 <option value="Tuvalu">Tuvalu</option>
                 <option value="Uganda">Uganda</option>
                 <option value="United Kingdom">United Kingdom</option>
                 <option value="Ukraine">Ukraine</option>
                 <option value="United Arab Erimates">United Arab Emirates</option>
                 <option value="United States of America">United States of America</option>
                 <option value="Uraguay">Uruguay</option>
                 <option value="Uzbekistan">Uzbekistan</option>
                 <option value="Vanuatu">Vanuatu</option>
                 <option value="Vatican City State">Vatican City State</option>
                 <option value="Venezuela">Venezuela</option>
                 <option value="Vietnam">Vietnam</option>
                 <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                 <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                 <option value="Wake Island">Wake Island</option>
                 <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                 <option value="Yemen">Yemen</option>
                 <option value="Zaire">Zaire</option>
                 <option value="Zambia">Zambia</option>
                 <option value="Zimbabwe">Zimbabwe</option>
              </select>
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
              <select id="country" name="country" class="form-control">
                 <option value="Afganistan">Afghanistan</option>
                 <option value="Albania">Albania</option>
                 <option value="Algeria">Algeria</option>
                 <option value="American Samoa">American Samoa</option>
                 <option value="Andorra">Andorra</option>
                 <option value="Angola">Angola</option>
                 <option value="Anguilla">Anguilla</option>
                 <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                 <option value="Argentina">Argentina</option>
                 <option value="Armenia">Armenia</option>
                 <option value="Aruba">Aruba</option>
                 <option value="Australia">Australia</option>
                 <option value="Austria">Austria</option>
                 <option value="Azerbaijan">Azerbaijan</option>
                 <option value="Bahamas">Bahamas</option>
                 <option value="Bahrain">Bahrain</option>
                 <option value="Bangladesh">Bangladesh</option>
                 <option value="Barbados">Barbados</option>
                 <option value="Belarus">Belarus</option>
                 <option value="Belgium">Belgium</option>
                 <option value="Belize">Belize</option>
                 <option value="Benin">Benin</option>
                 <option value="Bermuda">Bermuda</option>
                 <option value="Bhutan">Bhutan</option>
                 <option value="Bolivia">Bolivia</option>
                 <option value="Bonaire">Bonaire</option>
                 <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                 <option value="Botswana">Botswana</option>
                 <option value="Brazil">Brazil</option>
                 <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                 <option value="Brunei">Brunei</option>
                 <option value="Bulgaria">Bulgaria</option>
                 <option value="Burkina Faso">Burkina Faso</option>
                 <option value="Burundi">Burundi</option>
                 <option value="Cambodia">Cambodia</option>
                 <option value="Cameroon">Cameroon</option>
                 <option value="Canada">Canada</option>
                 <option value="Canary Islands">Canary Islands</option>
                 <option value="Cape Verde">Cape Verde</option>
                 <option value="Cayman Islands">Cayman Islands</option>
                 <option value="Central African Republic">Central African Republic</option>
                 <option value="Chad">Chad</option>
                 <option value="Channel Islands">Channel Islands</option>
                 <option value="Chile">Chile</option>
                 <option value="China">China</option>
                 <option value="Christmas Island">Christmas Island</option>
                 <option value="Cocos Island">Cocos Island</option>
                 <option value="Colombia">Colombia</option>
                 <option value="Comoros">Comoros</option>
                 <option value="Congo">Congo</option>
                 <option value="Cook Islands">Cook Islands</option>
                 <option value="Costa Rica">Costa Rica</option>
                 <option value="Cote DIvoire">Cote DIvoire</option>
                 <option value="Croatia">Croatia</option>
                 <option value="Cuba">Cuba</option>
                 <option value="Curaco">Curacao</option>
                 <option value="Cyprus">Cyprus</option>
                 <option value="Czech Republic">Czech Republic</option>
                 <option value="Denmark">Denmark</option>
                 <option value="Djibouti">Djibouti</option>
                 <option value="Dominica">Dominica</option>
                 <option value="Dominican Republic">Dominican Republic</option>
                 <option value="East Timor">East Timor</option>
                 <option value="Ecuador">Ecuador</option>
                 <option value="Egypt">Egypt</option>
                 <option value="El Salvador">El Salvador</option>
                 <option value="Equatorial Guinea">Equatorial Guinea</option>
                 <option value="Eritrea">Eritrea</option>
                 <option value="Estonia">Estonia</option>
                 <option value="Ethiopia">Ethiopia</option>
                 <option value="Falkland Islands">Falkland Islands</option>
                 <option value="Faroe Islands">Faroe Islands</option>
                 <option value="Fiji">Fiji</option>
                 <option value="Finland">Finland</option>
                 <option value="France">France</option>
                 <option value="French Guiana">French Guiana</option>
                 <option value="French Polynesia">French Polynesia</option>
                 <option value="French Southern Ter">French Southern Ter</option>
                 <option value="Gabon">Gabon</option>
                 <option value="Gambia">Gambia</option>
                 <option value="Georgia">Georgia</option>
                 <option value="Germany">Germany</option>
                 <option value="Ghana">Ghana</option>
                 <option value="Gibraltar">Gibraltar</option>
                 <option value="Great Britain">Great Britain</option>
                 <option value="Greece">Greece</option>
                 <option value="Greenland">Greenland</option>
                 <option value="Grenada">Grenada</option>
                 <option value="Guadeloupe">Guadeloupe</option>
                 <option value="Guam">Guam</option>
                 <option value="Guatemala">Guatemala</option>
                 <option value="Guinea">Guinea</option>
                 <option value="Guyana">Guyana</option>
                 <option value="Haiti">Haiti</option>
                 <option value="Hawaii">Hawaii</option>
                 <option value="Honduras">Honduras</option>
                 <option value="Hong Kong">Hong Kong</option>
                 <option value="Hungary">Hungary</option>
                 <option value="Iceland">Iceland</option>
                 <option value="Indonesia">Indonesia</option>
                 <option value="India">India</option>
                 <option value="Iran">Iran</option>
                 <option value="Iraq">Iraq</option>
                 <option value="Ireland">Ireland</option>
                 <option value="Isle of Man">Isle of Man</option>
                 <option value="Israel">Israel</option>
                 <option value="Italy">Italy</option>
                 <option value="Jamaica">Jamaica</option>
                 <option value="Japan">Japan</option>
                 <option value="Jordan">Jordan</option>
                 <option value="Kazakhstan">Kazakhstan</option>
                 <option value="Kenya">Kenya</option>
                 <option value="Kiribati">Kiribati</option>
                 <option value="Korea North">Korea North</option>
                 <option value="Korea Sout">Korea South</option>
                 <option value="Kuwait">Kuwait</option>
                 <option value="Kyrgyzstan">Kyrgyzstan</option>
                 <option value="Laos">Laos</option>
                 <option value="Latvia">Latvia</option>
                 <option value="Lebanon" selected>Lebanon</option>
                 <option value="Lesotho">Lesotho</option>
                 <option value="Liberia">Liberia</option>
                 <option value="Libya">Libya</option>
                 <option value="Liechtenstein">Liechtenstein</option>
                 <option value="Lithuania">Lithuania</option>
                 <option value="Luxembourg">Luxembourg</option>
                 <option value="Macau">Macau</option>
                 <option value="Macedonia">Macedonia</option>
                 <option value="Madagascar">Madagascar</option>
                 <option value="Malaysia">Malaysia</option>
                 <option value="Malawi">Malawi</option>
                 <option value="Maldives">Maldives</option>
                 <option value="Mali">Mali</option>
                 <option value="Malta">Malta</option>
                 <option value="Marshall Islands">Marshall Islands</option>
                 <option value="Martinique">Martinique</option>
                 <option value="Mauritania">Mauritania</option>
                 <option value="Mauritius">Mauritius</option>
                 <option value="Mayotte">Mayotte</option>
                 <option value="Mexico">Mexico</option>
                 <option value="Midway Islands">Midway Islands</option>
                 <option value="Moldova">Moldova</option>
                 <option value="Monaco">Monaco</option>
                 <option value="Mongolia">Mongolia</option>
                 <option value="Montserrat">Montserrat</option>
                 <option value="Morocco">Morocco</option>
                 <option value="Mozambique">Mozambique</option>
                 <option value="Myanmar">Myanmar</option>
                 <option value="Nambia">Nambia</option>
                 <option value="Nauru">Nauru</option>
                 <option value="Nepal">Nepal</option>
                 <option value="Netherland Antilles">Netherland Antilles</option>
                 <option value="Netherlands">Netherlands (Holland, Europe)</option>
                 <option value="Nevis">Nevis</option>
                 <option value="New Caledonia">New Caledonia</option>
                 <option value="New Zealand">New Zealand</option>
                 <option value="Nicaragua">Nicaragua</option>
                 <option value="Niger">Niger</option>
                 <option value="Nigeria">Nigeria</option>
                 <option value="Niue">Niue</option>
                 <option value="Norfolk Island">Norfolk Island</option>
                 <option value="Norway">Norway</option>
                 <option value="Oman">Oman</option>
                 <option value="Pakistan">Pakistan</option>
                 <option value="Palau Island">Palau Island</option>
                 <option value="Palestine">Palestine</option>
                 <option value="Panama">Panama</option>
                 <option value="Papua New Guinea">Papua New Guinea</option>
                 <option value="Paraguay">Paraguay</option>
                 <option value="Peru">Peru</option>
                 <option value="Phillipines">Philippines</option>
                 <option value="Pitcairn Island">Pitcairn Island</option>
                 <option value="Poland">Poland</option>
                 <option value="Portugal">Portugal</option>
                 <option value="Puerto Rico">Puerto Rico</option>
                 <option value="Qatar">Qatar</option>
                 <option value="Republic of Montenegro">Republic of Montenegro</option>
                 <option value="Republic of Serbia">Republic of Serbia</option>
                 <option value="Reunion">Reunion</option>
                 <option value="Romania">Romania</option>
                 <option value="Russia">Russia</option>
                 <option value="Rwanda">Rwanda</option>
                 <option value="St Barthelemy">St Barthelemy</option>
                 <option value="St Eustatius">St Eustatius</option>
                 <option value="St Helena">St Helena</option>
                 <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                 <option value="St Lucia">St Lucia</option>
                 <option value="St Maarten">St Maarten</option>
                 <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                 <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                 <option value="Saipan">Saipan</option>
                 <option value="Samoa">Samoa</option>
                 <option value="Samoa American">Samoa American</option>
                 <option value="San Marino">San Marino</option>
                 <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                 <option value="Saudi Arabia">Saudi Arabia</option>
                 <option value="Senegal">Senegal</option>
                 <option value="Seychelles">Seychelles</option>
                 <option value="Sierra Leone">Sierra Leone</option>
                 <option value="Singapore">Singapore</option>
                 <option value="Slovakia">Slovakia</option>
                 <option value="Slovenia">Slovenia</option>
                 <option value="Solomon Islands">Solomon Islands</option>
                 <option value="Somalia">Somalia</option>
                 <option value="South Africa">South Africa</option>
                 <option value="Spain">Spain</option>
                 <option value="Sri Lanka">Sri Lanka</option>
                 <option value="Sudan">Sudan</option>
                 <option value="Suriname">Suriname</option>
                 <option value="Swaziland">Swaziland</option>
                 <option value="Sweden">Sweden</option>
                 <option value="Switzerland">Switzerland</option>
                 <option value="Syria">Syria</option>
                 <option value="Tahiti">Tahiti</option>
                 <option value="Taiwan">Taiwan</option>
                 <option value="Tajikistan">Tajikistan</option>
                 <option value="Tanzania">Tanzania</option>
                 <option value="Thailand">Thailand</option>
                 <option value="Togo">Togo</option>
                 <option value="Tokelau">Tokelau</option>
                 <option value="Tonga">Tonga</option>
                 <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                 <option value="Tunisia">Tunisia</option>
                 <option value="Turkey">Turkey</option>
                 <option value="Turkmenistan">Turkmenistan</option>
                 <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                 <option value="Tuvalu">Tuvalu</option>
                 <option value="Uganda">Uganda</option>
                 <option value="United Kingdom">United Kingdom</option>
                 <option value="Ukraine">Ukraine</option>
                 <option value="United Arab Erimates">United Arab Emirates</option>
                 <option value="United States of America">United States of America</option>
                 <option value="Uraguay">Uruguay</option>
                 <option value="Uzbekistan">Uzbekistan</option>
                 <option value="Vanuatu">Vanuatu</option>
                 <option value="Vatican City State">Vatican City State</option>
                 <option value="Venezuela">Venezuela</option>
                 <option value="Vietnam">Vietnam</option>
                 <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                 <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                 <option value="Wake Island">Wake Island</option>
                 <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                 <option value="Yemen">Yemen</option>
                 <option value="Zaire">Zaire</option>
                 <option value="Zambia">Zambia</option>
                 <option value="Zimbabwe">Zimbabwe</option>
              </select>
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
