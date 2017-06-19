<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Consular Information' order='18'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page header' type='text' />

    <cms:editable name='topic1_image' label='Topic 1 Image' desc='Upload image of the first topic here' type='image' />
	<cms:editable name='topic1_title' label='Topic 1 title' desc='Enter title of the first topic' type='text' />
	<cms:editable name='topic1_content' label='Topic 1 content' desc='Enter short description of first topic' type='text' />
	<cms:editable name='topic1_link' label='Topic 1 link' desc='Put the full link of the first topic here' type='text' />
    <cms:editable name='topic2_image' label='Topic 2 Image' desc='Upload image of the second topic here' type='image' />
	<cms:editable name='topic2_title' label='Topic 2 title' desc='Enter title of the second topic' type='text' />
	<cms:editable name='topic2_content' label='Topic 2 content' desc='Enter short description of second topic' type='text' />
    <cms:editable name='topic2_link' label='Topic 2 link' desc='Put the full link of the second topic here' type='text' />
    <cms:editable name='topic3_image' label='Topic 3 Image' desc='Upload image of the third topic here' type='image' />
	<cms:editable name='topic3_title' label='Topic 3 title' desc='Enter title of the third topic' type='text' />
	<cms:editable name='topic3_content' label='Topic 3 content' desc='Enter short description of third topic' type='text' />
    <cms:editable name='topic3_link' label='Topic 3 link' desc='Put the full link of the third topic here' type='text' />
    <cms:editable name='topic4_image4' label='Topic 4 Image' desc='Upload image of the fourth topic here' type='image' />
	<cms:editable name='topic4_title' label='Topic 4 title' desc='Enter title of the fourth topic' type='text' />
	<cms:editable name='topic4_content' label='Topic 4 content' desc='Enter short description of fourth topic' type='text' />
    <cms:editable name='topic4_link' label='Topic 4 link' desc='Put the full link of the fourth topic here' type='text' />
	<cms:editable name='topic5_image' label='Topic 5 Image' desc='Upload image of the first topic here' type='image' />
	<cms:editable name='topic5_title' label='Topic 5 title' desc='Enter title of the first topic' type='text' />
	<cms:editable name='topic5_content' label='Topic 5 content' desc='Enter short description of first topic' type='text' />
	<cms:editable name='topic5_link' label='Topic 5 link' desc='Put the full link of the first topic here' type='text' />
    <cms:editable name='topic6_image' label='Topic 6 Image' desc='Upload image of the second topic here' type='image' />
	<cms:editable name='topic6_title' label='Topic 6 title' desc='Enter title of the second topic' type='text' />
	<cms:editable name='topic6_content' label='Topic 6 content' desc='Enter short description of second topic' type='text' />
    <cms:editable name='topic6_link' label='Topic 6 link' desc='Put the full link of the second topic here' type='text' />
    <cms:editable name='topic7_image' label='Topic 7 Image' desc='Upload image of the third topic here' type='image' />
	<cms:editable name='topic7_title' label='Topic 7 title' desc='Enter title of the third topic' type='text' />
	<cms:editable name='topic7_content' label='Topic 7 content' desc='Enter short description of third topic' type='text' />
    <cms:editable name='topic7_link' label='Topic 7 link' desc='Put the full link of the third topic here' type='text' />
    <cms:editable name='topic8_image4' label='Topic 8 Image' desc='Upload image of the fourth topic here' type='image' />
	<cms:editable name='topic8_title' label='Topic 8 title' desc='Enter title of the fourth topic' type='text' />
	<cms:editable name='topic8_content' label='Topic 8 content' desc='Enter short description of fourth topic' type='text' />
    <cms:editable name='topic8_link' label='Topic 8 link' desc='Put the full link of the fourth topic here' type='text' />
</cms:template>

<!doctype html>
<html class="no-js" lang="en">
<?php 
    $en_href = '../en/consular.php';    
    $ru_href = '../ru/consular.php';
    $ch_href = '../ch/consular.php'; 
    $my_title="<cms:show k_page_title />";
    $my_content="<cms:show en_content />";
    $my_page_link="<cms:show k_page_link />"."&l=en"; 
    $FolderOut="../"
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consular Information</title>
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
    
	<?php include('./../couch/snippets/en_header.php'); ?>
	
    <!-- ========== Header/Page Title - Large Dark Parallax ========== -->
	
		<header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
          <div class="container">
              <div class="row">

			    <div class="col-sm-1" style="padding-right: 1px; padding-left: 1px; vertical-align: middle;  max-height: 56px; max-width: 59px;">
                  <!-- Logo -->
				<img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
				
                <div class="col-sm-4" style="vertical-align: middle;">
                  <h1>Consular Information</h1>
				  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a href="main.php">Home</a></li>
                  <li class="active">Consular Information</li>
                </ol>

              </div>
            </div>
        </header>
	
    <!-- ========== Content ========== -->
    <div class="gray-bg">
        <section id="services" class="container section ft-centered" style="padding-top: 80px; padding-bottom: 50px">
            <div class="row">
                <!-- Item 1 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                    <a href=<cms:show topic1_link />><span style="background: url(<cms:show topic1_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic1_title /></h5>
                    <p><cms:show topic1_content /></p>
                </div>
                <!-- Item 2 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s">
                    <a href=<cms:show topic2_link />><span style="background: url(<cms:show topic2_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic2_title /></h5>
                    <p><cms:show topic2_content /></p>
                </div>
                <!-- Item 3 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s">
                    <a href=<cms:show topic3_link />><span style="background: url(<cms:show topic3_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic3_title /></h5>
                    <p><cms:show topic3_content /></p>
                </div>
                <!-- Item 4 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                    <a href=<cms:show topic4_link />><span style="background: url(<cms:show topic4_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic4_title /></h5>
                    <p><cms:show topic4_content /></p>
                </div>
            </div>
            <!-- / .row -->
			<div class="row">
                <!-- Item 5 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                    <a href=<cms:show topic5_link />><span style="background: url(<cms:show topic5_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic5_title /></h5>
                    <p><cms:show topic5_content /></p>
                </div>
                <!-- Item 6 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s">
                    <a href=<cms:show topic6_link />><span style="background: url(<cms:show topic6_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic6_title /></h5>
                    <p><cms:show topic6_content /></p>
                </div>
                <!-- Item 7 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s">
                    <a href=<cms:show topic7_link />><span style="background: url(<cms:show topic7_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic7_title /></h5>
                    <p><cms:show topic7_content /></p>
                </div>
                <!-- Item 8 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                    <a href=<cms:show topic8_link />><span style="background: url(<cms:show topic8_image />) no-repeat 0 100%; background-position: center; "></span></a>
                    <h5><cms:show topic8_title /></h5>
                    <p><cms:show topic8_content /></p>
                </div>
            </div>
        </section>
        <!-- / .ft-frames -->
    </div>
	
		<!-- ========== Footer Widgets ========== -->

		<?php include('../couch/snippets/en_footer.php'); ?>

        <!-- ========== Scripts ========== -->

        <script src="../assets/js/vendor/jquery-2.1.4.min.js "></script>
        <script src="../assets/js/vendor/google-fonts.js "></script>
        <script src="../assets/js/vendor/jquery.easing.js "></script>
        <script src="../assets/js/vendor/jquery.waypoints.min.js "></script>
        <script src="../assets/js/vendor/bootstrap.min.js "></script>
        <script src="../assets/js/vendor/bootstrap-hover-dropdown.min.js "></script>
        <script src="../assets/js/vendor/smoothscroll.js "></script>
        <script src="../assets/js/vendor/jquery.localScroll.min.js "></script>
        <script src="../assets/js/vendor/jquery.scrollTo.min.js "></script>
        <script src="../assets/js/vendor/jquery.stellar.min.js "></script>
        <script src="../assets/js/vendor/jquery.parallax.js "></script>
        <script src="../assets/js/vendor/slick.min.js "></script>
        <script src="../assets/js/vendor/jquery.easypiechart.min.js "></script>
        <script src="../assets/js/vendor/countup.min.js "></script>
        <script src="../assets/js/vendor/isotope.min.js "></script>
        <script src="../assets/js/vendor/jquery.magnific-popup.min.js "></script>
        <script src="../assets/js/vendor/wow.min.js "></script>

        <!-- Definity JS -->
        <script src="../assets/js/main.js "></script>
    </body>
</html>

<?php COUCH::invoke(); ?>
