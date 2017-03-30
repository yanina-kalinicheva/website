<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- / .navbar-header -->
        <!-- Navbar Links -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="col-xs-9">
          <ul class="nav navbar-nav">

			<!-- Home -->
			<li><a style="color:black;" href=<?php echo $langFolder. 'main.php'; ?>>Home<span class="sr-only"></span></a></li>
			<!-- / Home -->
			
            <!-- News -->
            <li><a style="color:black;" href=<?php echo $langFolder. 'news.php'; ?>>News<span class="sr-only"></span></a></li>
            <!-- / News -->
			
            <!-- About -->
            <li><a style="color:black;" href=<?php echo $langFolder. 'about.php'; ?>>About<span class="sr-only"></span></a></li>
            <!-- / About -->
			
            <!-- Russia & Taiwan -->
            <li class="dropdown">
                <a style="color:black;" href="russia_and_taiwan.php" class="dropdown-toggle" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
				Russia & <br>Taiwan<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <div class="row">
                        <!-- Culture -->
                        <div class="col-lg-6 mb-sm-30">
                            <li class="dropdown-header">Economic Cooperation</li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" target="_blank">Cultural Events</a></li>
                        </div>
                        <!-- Education -->
                        <div class="col-lg-6 mb-sm-30">
                            <li class="dropdown-header">Culture & Education</li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" target="_blank">Study in Russia</a></li>
                        </div>
                    </div>
                    <!-- / .row -->
                </ul>
                <!-- / .dropdown-menu -->
            </li>
            <!-- / Russia & Taiwan -->
			
            <!-- Consular Information -->
            <li class="dropdown">
                <a style="color:black;" href="consular.php" class="dropdown-toggle" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
				Consular<br>Information<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <div class="row">
                        <!-- Russian visa -->
                        <div class="col-lg-6 mb-sm-30">
                            <li class="dropdown-header">Russian visa</li>
                            <li role="separator" class="divider"></li>
                            <li><a href="mtc_text_page_example.php" target="_blank">Important Info</a></li>
                            <li><a href="mtc_text_page_example.php" target="_blank">General rules</a></li>
                            <li><a href="mtc_text_page_example.php" target="_blank">Visa fee</a></li>
                            <li><a href="mtc_text_page_example.php" target="_blank">Visa application</a></li>
                        </div>
                        <!-- Legalization -->
                        <div class="col-lg-6 mb-sm-30">
                            <li class="dropdown-header">Legalization</li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<cms:link 'mtc_text_page_example.php' />" target="_blank">Legalize <br><br>documents</a></li>
                            <li><a href="<cms:link 'mtc_text_page_example.php' />" target="_blank">How to</a></li>
                        </div>
                    </div>
                    <!-- / .row -->
                </ul>
                <!-- / .dropdown-menu -->
            </li>
            <!-- / Consular Information -->
			
            <!-- Additional Information -->
            <li class="dropdown">
                <a style="color:black;" href="info.php" class="dropdown-toggle" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
				Additional<br>Information<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <div class="row">
                        <!-- Additional Information -->
                        <div class="col-lg-6 mb-sm-30">
                            <li class="dropdown-header">Additional Information</li>
                            <li role="separator" class="divider"></li>
							<li><a href="#" target="_blank">Links</a></li>
                        </div>
                    </div>
                    <!-- / .row -->
                </ul>
                <!-- / .dropdown-menu -->
            </li>
            <!-- / Additional Information -->
			
            <!-- Contacts -->
            <li><a style="color:black;" href="contacts.php">Contacts<span class="sr-only"></span></a></li>
            </li>
            <!-- / Contacts -->
			
            </ul>
            <!-- / .nav .navbar-nav -->
            </div>
            <div class="col-xs-3">
			
			
          <!-- Navbar Links Right -->
          <ul class="nav navbar-nav navbar-right" style="font-size: 12px;">
        
			<!-- FAQ -->
            <li><a style="color:black;" href="faq.php">FAQ<span class="sr-only"></span></a></li>
            </li>
            <!-- / FAQ -->
			
            <!-- Search -->
            <li class="dropdown">
                <a style="color:black;" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i> Search</a>
                <ul class="dropdown-menu search-dropdown">
                    <li>
                        <form action="post">
                            <input type="search" class="form-control" placeholder="Search...">
                        </form>
                    </li>
                </ul>
            </li>
            <!-- / Search -->
			
            <!-- Languages -->
            <li class="dropdown">
                <a style="color:black;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">language <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">English</a></li>
                    <li><a href=<?php echo $ru_href; ?>>Русский</a></li>
                    <li><a href=<?php echo $ch_href; ?>>中文</a></li>
                </ul>
            </li>
            <!-- / Languages -->
			
            </ul>
            <!-- / .nav .navbar-nav .navbar-right -->
            </ul>
            </div>
        </div>
        <!--/.navbar-collapse -->
    </div>
    <!-- / .container -->
</nav>
<!-- / .navbar -->
