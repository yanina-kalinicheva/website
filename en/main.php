<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Representative Office of the MTC in Taipei' order='2'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='title' label='Title' desc='Enter title to the page' type='text'>Hot topics</cms:editable>
	<cms:editable name='subtitle' label='Subtitle' desc='Enter subtitle under the page title' type='text'>You may find this useful</cms:editable>
	<cms:editable name='topic1_title' label='Topic 1 title' desc='Enter title of the first topic' type='text' />
	<cms:editable name='topic1_content' label='Topic 1 content' desc='Enter short description of first topic' type='text' />
	<cms:editable name='topic2_title' label='Topic 2 title' desc='Enter title of the second topic' type='text' />
	<cms:editable name='topic2_content' label='Topic 2 content' desc='Enter short description of second topic' type='text' />
	<cms:editable name='topic3_title' label='Topic 3 title' desc='Enter title of the third topic' type='text' />
	<cms:editable name='topic3_content' label='Topic 3 content' desc='Enter short description of third topic' type='text' />
	<cms:editable name='topic4_title' label='Topic 4 title' desc='Enter title of the fourth topic' type='text' />
	<cms:editable name='topic4_content' label='Topic 4 content' desc='Enter short description of fourth topic' type='text' />
    <cms:editable name='pop_up' label='Popup' desc='Enter popup news' type='text' />
</cms:template>

<!doctype html>
<html class="no-js" lang="en">
<?php 
    $en_href = '../en/main.php';    
    $ru_href = '../ru/main.php';
    $ch_href = '../ch/main.php'; 
    $my_title="<cms:show k_page_title />";
    $my_content="<cms:show en_content />";
    $my_page_link="<cms:show k_page_link />"."&l=en"; 
    $FolderOut="../"
?>
<cms:set my_lang ='en' 'global' />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Representative Office of the MTC in Taipei</title>
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
    <!-- set myLang variable-->
    <script src="../assets/js/myLang.js"></script>
</head>

<body id="page-top">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- ========== Preloader ========== -->
    <div class="preloader">
        <img src="../assets/images/loader.svg" alt="Loading...">
    </div>
    <!-- ========== Popup ==========-->
    <cms:if "<cms:not_empty pop_up />" >
        <script type="text/javascript">
            var news = "<cms:show pop_up/>"
            alert(news);
        </script>
    </cms:if>
    
    <!-- ========== Navigation ========== -->
	
    <?php include('./../couch/snippets/en_header.php'); ?>
	
    <!-- ========== Header/Page Title - Large Dark Parallax ========== -->
    <header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
        <!-- background-size: cover to make it fit, background-position: align by px on left and top. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-1" style="padding-right: 1px; padding-left: 1px; vertical-align: middle;  max-height: 56px; max-width: 59px;">
                    <!-- Logo -->
                    <img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
                <div class="col-sm-8" style="vertical-align: middle;">
                    <h1>Representative Office<br>of the MTC in Taipei</h1>
                </div>
            </div>
        </div>
    </header>
	
    <!-- ========== Hot topics ========== -->
    <div class="gray-bg">
        <section id="services" class="container section ft-centered" style="padding-top: 80px; padding-bottom: 50px">
            <header class="sec-heading">
                <h2><cms:show title /></h2>
                <span class="subheading"><cms:show subtitle /></span>
            </header>
            <div class="row">
				<!-- Item 1 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                    <span class="et-tools"></span>
                    <h5><cms:show topic1_title /></h5>
                    <p><cms:show topic1_content /></p>
                </div>
                <!-- Item 2 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s">
                    <span class="et-desktop"></span>
                    <h5><cms:show topic2_title /></h5>
                    <p><cms:show topic2_content /></p>
                </div>
                <!-- Item 3 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s">
                    <span class="et-anchor"></span>
                    <h5><cms:show topic3_title /></h5>
                    <p><cms:show topic3_content /></p>
                </div>
                <!-- Item 4 -->
                <div class="col-md-3 col-sm-6 mb-sm-50 ft-item ft-square-frame-dark wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                    <span class="et-strategy"></span>
                    <h5><cms:show topic4_title /></h5>
                    <p><cms:show topic4_content /></p>
                </div>
            </div>
            <!-- / .row -->
        </section>
        <!-- / .ft-frames -->
    </div>
	
    <!-- ========== Newsfeed ========== -->
    <div id="blog" class="section container blog-classic" style="padding-top: 80px; padding-bottom: 30px">
        <header class="sec-heading">
            <h2>Our Newsfeed</h2>
        </header>
        <div class="row">
            <div class="col-md-6">
                <?php include('../couch/snippets/news_block.php');?>
                <a href="#"><h5 style="color:blue;" align=center>More news here</h5></a>
            </div>
            <!-- / .col-md-6 -->
            <div class="col-md-6">
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/mtcintaipei&colorscheme=light&show_faces=true&border_color&stream=true&header=true&width=600& height=600" scrolling="yes" frameborder="0" width="600" height="600" style="border:none; overflow:hidden; background: white;" allowTransparency="true"></iframe>
            </div>
            <!-- / .col-md-6 -->
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
		<!-- ========== Footer Widgets ========== -->
    
		<cms:embed 'en_footer.html' />
		
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
