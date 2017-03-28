<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Additional Information'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page title' type='text'>everything and more</cms:editable>

</cms:template>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Additional Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="../Office_small_logo.gif">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../assets/styles/vendor/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="../assets/fonts/et-lineicons/css/style.css">
        <link rel="stylesheet" href="../assets/fonts/linea-font/css/linea-font.css">
        <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="../assets/styles/vendor/slick.css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="../assets/styles/vendor/magnific-popup.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="../assets/styles/vendor/animate.css">


        <!-- Definity CSS -->
        <link rel="stylesheet" href="../assets/styles/main.css">
        <link rel="stylesheet" href="../assets/styles/responsive.css">

        <!-- JS -->
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="page-top">
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- ========== Preloader ========== -->

        <div class="preloader">
          <img src="../assets/images/loader.svg" alt="Loading...">
        </div>



        <!-- ========== Navigation ========== -->
		
		<cms:embed 'en_header.html' />

        <!-- ========== Page Title ========== -->
		
		<header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
          <div class="container">
              <div class="row">

				<div class="col-sm-1" style="padding-right: 1px; padding-left: 1px; vertical-align: middle;  max-height: 56px; max-width: 59px;">
					<img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
				
                <div class="col-sm-4" style="vertical-align: middle;">
                  <h1>Additional Information</h1>
                  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a href="main.php">Home</a></li>
                  <li class="active">Additional Information</li>
                </ol>

              </div>
            </div>
        </header>

		
        <!-- ========== Features - Cards ========== -->

        <div class="gray-bg">
          <section class="container ft-cards">
            <div class="row section">
              
              <!-- Item 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item">
                  <span class="linea-basic-pencil-ruler"></span>
                  <h4>Additional Information One</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Learn more <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item">
                  <span class="linea-basic-cards-diamonds"></span>
                  <h4>Additional Information Two</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Learn more <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item">
                  <span class="linea-basic-star"></span>
                  <h4>Additional Information Three</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Learn more <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

            </div><!-- / .row -->
          </section>
        </div><!-- / .gray-bg -->


		<!-- ========== Footer Widgets ========== -->
		
        <cms:embed 'en_footer.html' />
		
        <!-- ========== Scripts ========== -->

        <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="../assets/js/vendor/google-fonts.js"></script>
        <script src="../assets/js/vendor/jquery.easing.js"></script>
        <script src="../assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="../assets/js/vendor/smoothscroll.js"></script>
        <script src="../assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="../assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="../assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="../assets/js/vendor/jquery.parallax.js"></script>
        <script src="../assets/js/vendor/slick.min.js"></script>
        <script src="../assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="../assets/js/vendor/countup.min.js"></script>
        <script src="../assets/js/vendor/isotope.min.js"></script>
        <script src="../assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/vendor/wow.min.js"></script>

        <!-- Definity JS -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
<?php COUCH::invoke(); ?>