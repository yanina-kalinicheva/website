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
            <div class="col-xs-9" style="font-size: 24px; font-family: 標楷體,DFKai-sb,BiauKai,'AR PL UKai TW';">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'main.php'; ?>> 首頁<span class="sr-only"></span></a></li>
                    <!-- / Home -->
                    <!-- News -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'news.php'; ?>> 新聞<span class="sr-only"></span></a></li>
                    <!-- / News -->
                    <!-- About -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'about.php'; ?>> 關於代表處<span class="sr-only"></span></a></li>
                    <!-- / About -->
                    <!-- Russia & Taiwan -->
                    <li class="dropdown">
                        <a style="color:black;" href=<?php echo $langFolder. 'russia_and_taiwan.php'; ?> class="dropdown-toggle" data-toggle="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">俄羅斯和台灣<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="row">
                                <!-- Culture -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Economic Cooperation</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Cultural Events</a></li>
                                </div>
                                <!-- Education -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Culture & Education</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Study in Russia</a></li>
                                </div>
                            </div>
                            <!-- / .row -->
                        </ul>
                        <!-- / .dropdown-menu -->
                    </li>
                    <!-- / Russia & Taiwan -->
                    <!-- Consular Information -->
					<li><a style="color:black;" href=<?php echo $langFolder. 'consular.php'; ?>> 領事問題<span class="sr-only"></span></a></li>
                    <!-- / Consular Information -->
                    <!-- Additional Information -->
					<li><a style="color:black;" href=<?php echo $langFolder. 'info.php'; ?>> 其他資訊<span class="sr-only"></span></a></li>
                    <!-- / Additional Information -->
                    <!-- Contacts -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'contacts.php'; ?>>聯絡方式<span class="sr-only"></span></a></li>
                    </li>
                    <!-- / Contacts -->
                </ul>
                <!-- / .nav .navbar-nav -->
            </div>
            <!-- Navbar Links Right -->
            <div class="col-xs-3" style="font-size: 14px;">
                <ul class="nav navbar-nav navbar-right" style="font-family: 標楷體,DFKai-sb,BiauKai,'AR PL UKai TW';">
                    <!-- FAQ -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'faq.php'; ?>>問題集<span class="sr-only"></span></a></li>
                    <!-- / FAQ -->
                    <!-- Search -->
                    <li class="dropdown">
                        <a style="color:black;" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i> 搜尋</a>
                        <ul class="dropdown-menu search-dropdown" style="width:325px">
                            <li>
                                <style type="text/css">
                                .gsc-control-cse .gsc-table-result {
                                    font-family: inherit;
                                }
                                
                                .gsc-control-cse .gsc-input-box {
                                    height: inherit;
                                }
                                .gsc-input-box {
                                    height: 31px;
                                }
                                
                                input.gsc-input,
                                .gsc-input-box,
                                .gsc-input-box-hover,
                                .gsc-input-box-focus,
                                .gsc-search-button,
                                input.gsc-search-button-v2,
                                .gsib_b, .gsst_b, .gsst_a, 
                                #gs_tti50, #gsc-i-id1, #gs_id50{
                                    box-sizing: content-box;
                                    line-height: normal;
                                    vertical-align: middle;
                                    margin-top: 0px;
                                }
                                .gsib_b, .gsst_b, .gsst_a, .gscb_a, 
                                #gsc-i-id1{
                                    padding: 0px 0px 0px 0px;
                                    vertical-align: middle;
                                }
                                .navbar .navbar-nav .dropdown .dropdown-menu li .gsc-search-box a{
                                    padding: 0px 0px 0px 0px;
                                    line-height: normal;
                                }
                                .gscb_a{
                                    box-sizing: border-box;
                                    line-height: normal;
                                    margin-top: 0px;
                                }
                                </style>
                                <script>
                                (function() {
                                    var cx = '005309254330236089334:qpgizmgtvy0';
                                    var gcse = document.createElement('script');
                                    gcse.type = 'text/javascript';
                                    gcse.async = true;
                                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(gcse, s);
                                })();
                                </script>
                                <gcse:searchbox-only></gcse:searchbox-only>
                            </li>
                        </ul>
                    </li>
                    <!-- / Search -->
                    <!-- Languages -->
                    <li class="dropdown">
                        <a style="color:black;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Рус/En/中文<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href=<?php echo $en_href; ?>>English</a></li>
                            <li><a href=<?php echo $ru_href; ?>>Русский</a></li>
                            <li><a href="#">中文</a></li>
                        </ul>
                    </li>
                    <!-- / Languages -->
                </ul>
                <!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
        <!--/.navbar-collapse -->
    </div>
    <!-- / .container -->
</nav>
<!-- / .navbar -->
