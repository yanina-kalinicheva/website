<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='問題集'>
	<cms:editable name='header_image' label='Header Image' desc='Upload header image here' type='image' />
	<cms:editable name='greetings' label='Greeting' desc='Enter greetings to the page title' type='text'>you have questions, we have answers</cms:editable>
	<cms:editable name='title' label='Title' desc='Enter title to the page' type='text'>frequently asked questions</cms:editable>

</cms:template>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>問題集</title>
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

		<cms:embed 'ch_header.html' />
        
        <!-- ========== Page Title ========== -->
		
		<header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light"
				style="background-image: url(<cms:show header_image alt="" />); background-size:cover; background-position: 0px -130px; background-repeat:no-repeat;">
          <div class="container">
              <div class="row">

				<div class="col-sm-1" style="padding-right: 1px; padding-left: 1px; vertical-align: middle;  max-height: 56px; max-width: 59px;">
					<img style="width: 90%" src="../assets/images/MTC_in_Taipei_logo.gif" alt="Representative Office - Logo">
                </div>
				
                <div class="col-sm-4" style="vertical-align: middle;">
                  <h1 style="font-size:210%;">問題集</h1>
                  <span class="subheading"><cms:show greetings /></span>
                </div>
                <ol class="col-sm-7 text-right breadcrumb">
                  <li><a style="font-size:130%;" href="main.php">主頁</a></li>
                  <li style="font-size:130%;" class="active">問題集</li>
                </ol>

              </div>
            </div>
        </header>
		
        <!-- ========== FAQ Layout - 1 ========== -->

        <section class="container section" style="padding-top: 80px; padding-bottom: 50px">
          <header class="sec-heading">
            <h2><cms:show title /></h2>
          </header>

          <div class="row ws-s">

            <!-- FAQ Group 1 -->
            <div class="col-md-6">
              <div class="faq-group-header ws-s">
                <h4 class="mb-30">Questions about visa</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore facilis voluptas ipsam iure vero similique consectetur error quas aliquid nemo nisi.</p>
              </div>
              
              <!-- FAQ Accordion -->
              <div class="panel-group accordions-1 ws-s" id="faq-accordion-1" role="tablist" aria-multiselectable="true">

                <!-- Item 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-1-h-1">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-1" href="#faq-1-collapse-1" aria-expanded="false" aria-controls="faq-1-collapse-1">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-1-collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-1-h-1">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 2 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-1-h-2">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-1" href="#faq-1-collapse-2" aria-expanded="false" aria-controls="faq-1-collapse-2">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-1-collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-1-h-2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-1-h-3">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-1" href="#faq-1-collapse-3" aria-expanded="false" aria-controls="faq-1-collapse-3">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-1-collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-1-h-3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 4 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-1-h-4">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-1" href="#faq-1-collapse-4" aria-expanded="false" aria-controls="faq-1-collapse-4">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-1-collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-1-h-4">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

              </div><!-- / .panel-group .accordion-1 -->

              <hr class="mb-sm-50">
            </div><!-- / .col-md-6 -->


            <!-- FAQ Group 2 -->
            <div class="col-md-6">
              <div class="faq-group-header ws-s">
                <h4 class="mb-30">Questions about legalization</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, blanditiis corrupti ea optio veniam, reiciendis, quidem iste quae.</p>
              </div>
              
              <!-- FAQ Accordion -->
              <div class="panel-group ws-s accordions-1" id="faq-accordion-2" role="tablist" aria-multiselectable="true">

                <!-- Item 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-2-h-1">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-2" href="#faq-2-collapse-1" aria-expanded="false" aria-controls="faq-2-collapse-1">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-2-collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-2-h-1">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 2 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-2-h-2">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-2" href="#faq-2-collapse-2" aria-expanded="false" aria-controls="faq-2-collapse-2">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-2-collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-2-h-2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-2-h-3">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-2" href="#faq-2-collapse-3" aria-expanded="false" aria-controls="faq-2-collapse-3">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-2-collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-2-h-3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 4 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-2-h-4">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-2" href="#faq-2-collapse-4" aria-expanded="false" aria-controls="faq-2-collapse-4">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-2-collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-2-h-4">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

              </div><!-- / .panel-group .accordion-1 -->

              <hr>
            </div><!-- / .col-md-6 -->
          </div><!-- / .row -->

          <div class="row">


            <!-- FAQ Group 3 -->
            <div class="col-md-6">
              <div class="faq-group-header ws-s">
                <h4 class="mb-30">Questions Group 3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore facilis voluptas ipsam iure vero similique consectetur error quas aliquid nemo nisi.</p>
              </div>
              
              <!-- FAQ Accordion -->
              <div class="panel-group accordions-1 ws-s" id="faq-accordion-3" role="tablist" aria-multiselectable="true">

                <!-- Item 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-3-h-1">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-3" href="#faq-3-collapse-1" aria-expanded="false" aria-controls="faq-3-collapse-1">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-3-collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-3-h-1">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 2 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-3-h-2">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-3" href="#faq-3-collapse-2" aria-expanded="false" aria-controls="faq-3-collapse-2">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-3-collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-3-h-2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-3-h-3">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-3" href="#faq-3-collapse-3" aria-expanded="false" aria-controls="faq-3-collapse-3">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-3-collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-3-h-3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 4 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-3-h-4">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-3" href="#faq-3-collapse-4" aria-expanded="false" aria-controls="faq-3-collapse-4">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-3-collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-3-h-4">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

              </div><!-- / .panel-group .accordion-1 -->
            </div><!-- / .col-md-6 -->


            <!-- FAQ Group 4 -->
            <div class="col-md-6">
              <div class="faq-group-header ws-s">
                <h4 class="mb-30">Questions Group 4</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, blanditiis corrupti ea optio veniam, reiciendis, quidem iste quae.</p>
              </div>
              
              <!-- FAQ Accordion -->
              <div class="panel-group accordions-1" id="faq-accordion-4" role="tablist" aria-multiselectable="true">

                <!-- Item 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-4-h-1">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-4" href="#faq-4-collapse-1" aria-expanded="false" aria-controls="faq-4-collapse-1">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-4-collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-4-h-1">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 2 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-4-h-2">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-4" href="#faq-4-collapse-2" aria-expanded="false" aria-controls="faq-4-collapse-2">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-4-collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-4-h-2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-4-h-3">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-4" href="#faq-4-collapse-3" aria-expanded="false" aria-controls="faq-4-collapse-3">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-4-collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-4-h-3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->

                <!-- Item 4 -->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="faq-4-h-4">
                    <h4 class="panel-title">
                      <span class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-4" href="#faq-4-collapse-4" aria-expanded="false" aria-controls="faq-4-collapse-4">
                        Example question in acordion ?
                      </span>
                    </h4>
                  </div>
                  <div id="faq-4-collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-4-h-4">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!-- / .panel -->
                
              </div><!-- / .panel-group .accordion-1 -->
            </div><!-- / .col-md-6 -->
          </div><!-- / .row -->
        </section><!-- / .container -->


		<!-- ========== Footer Widgets ========== -->
        
		<cms:embed 'ch_footer.html' />   


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