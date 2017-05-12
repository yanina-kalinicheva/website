<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='新聞' order='6'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page title' type='text' />

</cms:template>

<!doctype html>
<html class="no-js" lang="ch">
<?php 
    $en_href = '../en/news.php';    
    $ru_href = '../ru/news.php';
    $my_title="<cms:show ch_title />";
    $my_content="<cms:show ch_content />";
    $my_page_link="<cms:show k_page_link />"."&l=ch"; 
    $FolderOut="../"
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>新聞</title>
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
        
		<?php include('../couch/snippets/ch_header.php'); ?>
		
        <!-- ========== Page Title ========== -->
		<header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
						    <h1 style="font-size:210%;">新聞</h1>
                            <span class="subheading"><cms:show greetings /></span>
                        </div>
                        <ol class="col-sm-6 text-right breadcrumb">
							<li><a style="font-size:130%;" href="main.php">主頁</a></li>
							<li style="font-size:130%;" class="active"><a href="news.php">新聞</a></li>
                            <li class="active">
                                <cms:show k_page_title />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <!-- include news list view -->
		<?php include('../couch/snippets/news_list.php'); ?>
        <!-- / include news list view -->
        <!-- ========== Footer ========== -->

		<?php include('../couch/snippets/ch_footer.php'); ?>
		
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