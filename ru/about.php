<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='О нас' order='8'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page header' type='text' />
	<cms:editable name='article_image' label='Image' width='750' height='400' type='image' />
	<cms:editable name='article_title' label='Article Title' desc='Enter article title here' type='text'>О нас</cms:editable>
	<cms:editable name='article_content' label='Article Content' desc='Enter main content of the article here' toolbar='full' type='richtext' />	
</cms:template>

<!doctype html>
<html class="no-js" lang="en">

<?php 
    $en_href = '../en/about.php';    
    $ch_href = '../ch/about.php';
    $my_title="<cms:show ru_title />";
    $my_content="<cms:show ru_content />";
    $my_page_link="<cms:show k_page_link />"."&l=ru"; 
    $FolderOut="../"
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>О нас</title>
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
		
		<header class="page-title pt-light pt-parallax pt-plax-md-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
          <div class="container">
              <div class="row" style="padding-top:50px">

				<div class="col-sm-1" style="vertical-align: middle; max-height: 90px; max-width: 90px;">
                  <!-- Logo -->
				<img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
				
			  </div>
			  <div class="row" style="padding-top:20px">
                <div class="col-sm-4" style="vertical-align: middle;">
                  <h1>О нас</h1>
                  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a href="main.php">Главная</a></li>
                  <li class="active">О нас</li>
                </ol>

              </div>
            </div>
        </header>
		

        <!-- ========== Single Blog Post ========== -->
        
        <div id="blog" class="section container blog-classic" style="padding-top: 80px; padding-bottom: 50px">
          <div class="row">

              
                <!-- Blog Post -->
                <div class="col-md-12 blog-post-single wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">

                  <!-- Image -->
                  <img class="img-responsive post-img" src="<cms:show article_image />">

                  <!-- Title -->
                  <h2 class="post-title"><cms:show article_title /></h2>
                  

                  <div class="blog-post-content">
                    <cms:show article_content />
                  </div>
                  
                </div><!-- / .blog-post-single -->
               

          </div><!-- / .row -->
        </div><!-- / .container -->



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

        <!-- Definity JS -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
<?php COUCH::invoke(); ?>