
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
                                    <a href='#' class='btn btn-primary'>Donate</a>
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
              <a href="#" class="btn btn-primary">Donate</a>
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
              <a href="#" class="btn btn-primary">Donate</a>
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
              <a href="#" class="btn btn-primary">Donate</a>
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
              <a href="#" class="btn btn-primary">Donate</a>
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
              <a href="#" class="btn btn-primary">Donate</a>
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
              <a href="#" class="btn btn-primary">Donate</a>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="goUp" onclick="scrollToUp()">
      <i class="fas fa-long-arrow-alt-up"></i>
    </div>



    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default">Nice Button</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
    </div>
    <!--  End Modal -->
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
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<!-- <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script> -->
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

  <script>
    // $(document).ready(function() {
    //   // the body of this function is in assets/js/now-ui-kit.js
    //   nowuiKit.initSliders();
    // });

    function scrollToDown() {

      // $("html, body").animate({ scrollTop: $(window).height()}, fast, 1000);
      $("html, body").animate({ scrollTop: "900" });

      }

      function scrollToUp() {

        // $("html, body").animate({ scrollTop: $(window).height()}, fast, 1000);
        $("html, body").animate({ scrollTop: "0" });

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
