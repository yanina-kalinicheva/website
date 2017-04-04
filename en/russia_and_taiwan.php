<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Russia and Taiwan'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page title' type='text'>business, culture, education</cms:editable>

</cms:template>

<!doctype html>
<html class="no-js" lang="en">
<?php 
    $en_href = '../en/russia_and_taiwan.php';    
    $ru_href = '../ru/russia_and_taiwan.php';
    $ch_href = '../ch/russia_and_taiwan.php'; 
    $my_title="<cms:show k_page_title />";
    $my_content="<cms:show en_content />";
    $my_page_link="<cms:show k_page_link />"."&l=en"; 
    $FolderOut="../"
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Russia and Taiwan</title>
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
                  <h1>Russia and Taiwan</h1>
                  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a href="main.php">Home</a></li>
                  <li class="active">Russia and Taiwan</li>
                </ol>

              </div>
            </div>
        </header>
		
        <!-- ========== Features - Layout 50/50 ========== -->

        <div class="container-fluid ft-layout-50">
          <div class="row">
            
            <!-- Feature 1 -->
            <div class="ft-item">
              <div class="col-lg-6 ft-img-wrapper">
                <img src="http://placehold.it/900x580" alt="Features Image">
              </div>
              <div class="col-lg-6 ft-content-wrapper">
                <h5>Feature One</h5>
                <h6 class="h-alt">Lorem ipsum dolor sit amet</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="btn-ghost">Call to Action</button>
              </div>
            </div><!-- / .ft-item -->

            <!-- Feature 2 -->
            <div class="ft-item">
              <div class="col-lg-6 ft-content-wrapper">
                <h5>Feature Two</h5>
                <h6 class="h-alt">Lorem ipsum dolor sit amet</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="btn-ghost">Call to Action</button>
              </div>
              <div class="col-lg-6 ft-img-wrapper">
                <img src="http://placehold.it/900x580" alt="Features Image">
              </div>
            </div><!-- / .ft-item -->

          </div><!-- / .row -->
        </div><!-- / .ft-layout-50 -->

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