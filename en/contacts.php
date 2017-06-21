<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Contacts' order='12'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page header' type='text' />
	<cms:editable name='phone' label='Phone' toolbar='full' type='richtext' />
	<cms:editable name='address' label='Address' type='text'>9F, No. 2, Section 5, XinYi Road, Taipei City, Taiwan 11049 (Moscow-Taipei Commission)</cms:editable>
	<cms:editable name='fax' label='Fax' type='text'>(+886-2) 8780-2511</cms:editable>
	<cms:editable name='open_hours' label='Open Hours' toolbar='full' type='richtext' />

</cms:template>

<!doctype html>
<html class="no-js" lang="en">
<?php 
    $en_href = '../en/contacts.php';    
    $ru_href = '../ru/contacts.php';
    $ch_href = '../ch/contacts.php'; 
    $my_title="<cms:show k_page_title />";
    $my_content="<cms:show en_content />";
    $my_page_link="<cms:show k_page_link />"."&l=en"; 
    $FolderOut="../"
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contacts</title>
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

        <!-- ========== Page Title ========== -->
		
		<header class="page-title pt-light pt-parallax pt-plax-md-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
          <div class="container">
              <div class="row" style="padding-top:50px">

				<div class="col-sm-1" style="vertical-align: middle; max-height: 90px; max-width: 90px;">
					<img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
			  </div>
				
			  <div class="row" style="padding-top:20px">
                <div class="col-sm-4" style="vertical-align: middle;">
                  <h1>Contacts</h1>
                  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a href="main.php">Home</a></li>
                  <li class="active">contacts</li>
                </ol>

              </div>
            </div>
        </header>

       
        <!-- ========== Contact ========== -->

        <section id="contact" class="section contact-1" style="padding-top: 80px; padding-bottom: 50px">
                   
          <div class="contact-wrapper">
            <!-- Map -->
            <div id="map-canvas" class="gmap map-boxed"></div>

            <!-- Show Info Button -->
                <div class="show-info-link">
                  <a href="#" class="show-info"><i class="fa fa-info"></i><h6>Show info</h6></a>
                </div>

            <div class="container">
              <div class="row ws-m">

                <!-- Address Info -->
                <div class="col-xs-offset-1 col-xs-11 col-md-offset-2 col-md-6 contact-info-wrapper" style="padding-top: 30px; padding-bottom: 30px; padding-left: 60px; padding-right: 60px">
                  <address>
                    <div class="row">

                      <!-- Left -->
                      <div class="col-sm-5 address-group" style="padding-right: 30px">
					  
						<div class="row" style="padding-bottom: 20px">
							<span>Address</span>
							<p style="font-size:14px;"><a href="https://www.google.ru/maps/place/No.+2,+Section+5,+Xinyi+Road,+Xinyi+District,+Taipei+City,+Taiwan+110/@25.0328924,121.5576395,17z/data=!3m1!4b1!4m5!3m4!1s0x3442abc9ff8bf12f:0x7b514dde604f3a5e!8m2!3d25.0328924!4d121.5598282">
							  <cms:show address /></a></p>
						</div>
						
						<div class="row" style="padding-bottom: 20px">
							<span>Phone</span>
							<p><cms:show phone /></p>
						</div>
						
						<div class="row" style="padding-bottom: 20px">
							<span>Fax</span>
							<p><cms:show fax /></p>
						</div>
						
                      </div>

					  <!-- Right -->
                      <div class="col-sm-7 address-group">
                        <span>Open Hours</span>
                        <cms:show open_hours />
                      </div>
					  
                    </div><!-- / .row -->

                    <!-- Show Map Button -->
                    <div class="row show-map-link">
                      <a href="#" class="show-map"><span class="icon-map-pin"></span>Show on map</a>
                    </div><!-- / .row -->
                  </address>
                </div><!-- / .contact-info-wrapper -->
              </div><!-- / .row -->
              
              <!-- Contact Form -->
              <div class="row">
                <form action="../assets/contact-form/contact-form.php" method="POST" id="contact-form-1" class="form-ajax">
                  <div class="col-md-offset-2 col-md-4 wow fadeInUp" data-wow-duration="1s">
				    
            <!-- Lang -->
                  <textarea name='lang' style="display: none">en</textarea>
				    <!-- Subject -->
					<div class="form-group">
						<select class="form-control" id="select-form" name="subject-option">
						<option value="Consular">Consular</option>
						<option value="Culture and Education">Culture and Education</option>
						<option value="Trade and Economic">Trade and Economic</option>
						<option value="Other">Other</option>

						</select>
						<label for="select-form">Select a subject</label>
					</div>

                    <!-- Name -->
                    <div class="form-group">
                      <input type="text" name="name" id="name-contact-1-en" class="form-control validate-locally" placeholder="Enter your name">
                      <label for="name-contact-1">Your name</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <input type="email" name="email" id="email-contact-1-en" class="form-control validate-locally" placeholder="Enter your email">
                      <label for="email-contact-1">Your email</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                  </div>

                  <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">

                    <!-- Message -->
                    <div class="form-group">
                      <textarea name="message" id="message-contact-1" class="form-control" rows="9" placeholder="Your Message"></textarea>
                      <label for="message-contact-1">Message</label>
                    </div>
                    <div>
                      <input type="submit" class="btn pull-right" value="Send Message">
                    </div>

                    <!-- Ajax Message -->
                    <div class="ajax-message col-md-12 no-gap"></div>

                  </div><!-- / .col-md-4 -->

                </form>
              </div><!-- / .row -->
            </div><!-- / .container -->
          </div><!-- / .contact-wrapper -->
        </section><!-- / .contact-1 -->



		<!-- ========== Footer Widgets ========== -->
		
		<?php include('../couch/snippets/en_footer.php'); ?>
    
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

        <!-- Google Maps -->
        <script src="../assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>

        <!-- Definity JS -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
<?php COUCH::invoke(); ?>