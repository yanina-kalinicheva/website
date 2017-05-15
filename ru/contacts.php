<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Контакты' order='11'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page header' type='text' />
	<cms:editable name='phone' label='Phone' toolbar='full' type='richtext' />
	<cms:editable name='address' label='Address' type='text'>9F, No. 2, Section 5, XinYi Road, Taipei City, Taiwan 11049 (Moscow-Taipei Commission)</cms:editable>
	<cms:editable name='fax' label='Fax' type='text'>(+886-2) 8780-2511</cms:editable>
	<cms:editable name='open_hours' label='Open Hours' toolbar='full' type='richtext' />

</cms:template>

<!doctype html>
<?php 
    $en_href = '../en/contacts.php';    
    $ch_href = '../ch/contacts.php';
    $my_title="<cms:show ru_title />";
    $my_content="<cms:show ru_content />";
    $my_page_link="<cms:show k_page_link />"."&l=ru"; 
    $FolderOut="../"
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Контакты</title>
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

        <?php include('./../couch/snippets/ru_header.php'); ?>

        <!-- ========== Page Title ========== -->
		
		<header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
          <div class="container">
              <div class="row">

				<div class="col-sm-1" style="padding-right: 1px; padding-left: 1px; vertical-align: middle;  max-height: 56px; max-width: 59px;">
					<img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
				
                <div class="col-sm-4" style="vertical-align: middle;">
                  <h1>Контакты</h1>
                  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a href="main.php">Главная</a></li>
                  <li class="active">Контакты</li>
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
                  <a href="#" class="show-info"><i class="fa fa-info"></i><h6>Показать сведения</h6></a>
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
							<span>Адрес</span>
							<p style="font-size:14px;"><a href="https://www.google.ru/maps/place/No.+2,+Section+5,+Xinyi+Road,+Xinyi+District,+Taipei+City,+Taiwan+110/@25.0328924,121.5576395,17z/data=!3m1!4b1!4m5!3m4!1s0x3442abc9ff8bf12f:0x7b514dde604f3a5e!8m2!3d25.0328924!4d121.5598282">
							  <cms:show address /></a></p>
						</div>
						
						<div class="row" style="padding-bottom: 20px">
							<span>Телефон</span>
							<p><cms:show phone /></p>
						</div>
						
						<div class="row" style="padding-bottom: 20px">
							<span>Факс</span>
							<p><cms:show fax /></p>
						</div>
						
                      </div>

					  <!-- Right -->
                      <div class="col-sm-7 address-group">
                        <span>Время работы</span>
                        <cms:show open_hours />
                      </div>
					  
                    </div><!-- / .row -->


                    <!-- Show Map Button -->
                    <div class="row show-map-link">
                      <a href="#" class="show-map"><span class="icon-map-pin"></span>Показать на карте</a>
                    </div><!-- / .row -->
                  </address>
                </div><!-- / .contact-info-wrapper -->
              </div><!-- / .row -->
              
              <!-- Contact Form -->
              <div class="row">
                <form action="../assets/contact-form/contact-form.php" method="POST" id="contact-form-1" class="form-ajax">
                  <div class="col-md-offset-2 col-md-4 wow fadeInUp" data-wow-duration="1s">
				    
            <!-- Lang -->
              <textarea name='lang' style="display: none">ru</textarea>
				    <!-- Subject -->
					<div class="form-group">
						<select class="form-control" id="select-form">
						<option>Другое</option>
						<option>Консульские вопросы (паспорта, справки, визы, легализация)</option>
						<option>Вопросы культуры и образования</option>
						<option>Торгово-экономические вопросы</option>
						</select>
						<label for="select-form">Выберите тему</label>
					</div>

                    <!-- Name -->
                    <div class="form-group">
                      <input type="text" name="name" id="name-contact-1-ru" class="form-control validate-locally" placeholder="Введите Ваше имя">
                      <label for="name-contact-1">Ваше имя</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <input type="email" name="email" id="email-contact-1-ru" class="form-control validate-locally" placeholder="Введите Вашу электронную почту">
                      <label for="email-contact-1">Ваша электронная почта</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                  </div>

                  <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">

                    <!-- Message -->
                    <div class="form-group">
                      <textarea name="message" id="message-contact-1" class="form-control" rows="9" placeholder="Ваше сообщение"></textarea>
                      <label for="message-contact-1">Сообщение</label>
                    </div>
                    <div>
                      <input type="submit" class="btn pull-right" value="Отправить сообщение">
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
        
		<?php include('../couch/snippets/ru_footer.php'); ?>

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