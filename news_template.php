<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='News' clonable='1'>
    <cms:editable name='news_image' crop='1' width='750' height='400' type='image' />
    <cms:editable name='en_content' type='richtext' />
    <cms:editable name='ch_title' type='text' />
    <cms:editable name='ch_content' type='richtext' />
    <cms:editable name='ru_title' type='text' />
    <cms:editable name='ru_content' type='richtext' />
</cms:template>
<!doctype html>
<html class="no-js" lang="en">
<?php 
    if (isset($_GET['l'])) { 
        $lang = $_GET['l'];
    } else{
        $lang ="en";
    }

    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }else{

    }

    //for change language
    $en_href = 'news_template.php?p='.$page."&l=en";
    $ru_href = 'news_template.php?p='.$page."&l=ru";
    $ch_href = 'news_template.php?p='.$page."&l=ch";

    switch ($lang) {
        case 'ch':
            $my_title="<cms:show ch_title />";
            $my_content="<cms:show ch_content />";
            $my_page_link="<cms:show k_page_link />"."&l=ch";
            $my_navigator='couch/snippets/ch_header.php';
            $my_footer='couch/snippets/ch_footer.php';
            $langFolder="ch/";
            break;

        case 'ru':
            $my_title="<cms:show ru_title />";
            $my_content="<cms:show ru_content />";
            $my_page_link="<cms:show k_page_link />"."&l=ru";
            $my_navigator='couch/snippets/ru_header.php';
            $my_footer='couch/snippets/ru_footer.html';
            $langFolder="ru/";
            break;

        case 'en':
        default:
            $my_title="<cms:show k_page_title />";
            $my_content="<cms:show en_content />";
            $my_page_link="<cms:show k_page_link />"."&l=en";
            $my_navigator='couch/snippets/en_header.php';
            $my_footer='couch/snippets/en_footer.html';
            $langFolder="en/";
            break;
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MTC_news</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./Office_small_logo.gif">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/styles/vendor/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="./assets/fonts/et-lineicons/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/linea-font/css/linea-font.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome/css/font-awesome.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="./assets/styles/vendor/slick.css">
    <!-- Lightbox -->
    <link rel="stylesheet" href="./assets/styles/vendor/magnific-popup.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="./assets/styles/vendor/animate.css">
    <!-- Definity CSS -->
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/responsive.css">
    <!-- JS -->
    <script src="./assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body id="page-top">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- ========== Preloader ========== -->
    <div class="preloader">
        <img src="./assets/images/loader.svg" alt="Loading...">
    </div>
    <!-- ========== Navigation ========== -->
    <?php include($my_navigator); ?>
    <!-- / .navbar -->
    <!-- ========== Page Title ========== -->
    <header class="page-title pt-light pt-plax-md-light" data-stellar-background-ratio="0.4">
        <div class="bg-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1><?php echo $my_title; ?></h1>
                        <span class="subheading"></span>
                    </div>
                    <ol class="col-sm-6 text-right breadcrumb">
                        <li><a href="<?php echo $lang; ?>/main.php">首頁</a></li>
                        <li><a href="<?php echo $lang; ?>/news.php">新聞</a></li>
                        <li class="active">
                            <?php echo $my_title; ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Single Blog Post ========== -->
    <div id="blog" class="section container blog-classic">
        <div class="row">
            <div class="col-md-8 mb-sm-160">
                <!-- Blog Post -->
                <div class="col-md-12 blog-post-single wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">
                    <!-- Image -->
                    <img class="img-responsive post-img" src="<cms:show news_image />">
                    <!-- Meta data -->
                    <div class="post-meta">
                        <div class="post-date">
                            <i class="fa fa-calendar-o"></i>
                            <span><cms:date k_page_date format='%B %d.%Y' locale='russian' charset='ISO-8859-5'/></span>
                        </div>
                    </div>
                    <!-- / .meta -->
                    <!-- Title -->
                    <h3 class="post-title">
                        <a href="<?php echo $my_page_link; ?>" ><?php echo $my_title; ?></a>
                    </h3>
                    <div class="blog-post-content">
                        <!-- Content -->
                        <?php echo $my_content; ?>
                    </div>
                </div>
                <!-- / .blog-post-single -->
                <!-- Post Navigation -->
                <div class="row">
                    <cms:pages start_on=k_page_date order='asc' limit='1' offset='1'>
                        <a href="<?php echo $my_page_link; ?>" class="next-btn">Next post</a>
                    </cms:pages>
                    <cms:pages stop_before=k_page_date limit='1'>
                        <a href="<?php echo $my_page_link; ?>" class="prev-btn">Prev post</a>
                    </cms:pages>
                </div>
            </div>
            <!-- / .col-md-8 -->
            <!-- embed sidbar -->
            <?php include('couch/snippets/news_sidebar.php'); ?>
            <!-- / embed sidbar -->
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <!-- ========== Footer ========== -->
    <?php include($my_footer); ?>
    <!-- / .footer-widgets -->
    <!-- ========== Scripts ========== -->
    <script src="./assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="./assets/js/vendor/google-fonts.js"></script>
    <script src="./assets/js/vendor/jquery.easing.js"></script>
    <script src="./assets/js/vendor/jquery.waypoints.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <script src="./assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="./assets/js/vendor/smoothscroll.js"></script>
    <script src="./assets/js/vendor/jquery.localScroll.min.js"></script>
    <script src="./assets/js/vendor/jquery.scrollTo.min.js"></script>
    <script src="./assets/js/vendor/jquery.stellar.min.js"></script>
    <script src="./assets/js/vendor/jquery.parallax.js"></script>
    <script src="./assets/js/vendor/slick.min.js"></script>
    <script src="./assets/js/vendor/jquery.easypiechart.min.js"></script>
    <script src="./assets/js/vendor/countup.min.js"></script>
    <script src="./assets/js/vendor/isotope.min.js"></script>
    <script src="./assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/vendor/wow.min.js"></script>
    <!-- Definity JS -->
    <script src="./assets/js/main.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>
