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
                <ul class="nav navbar-nav" style="font-size: 11px;">
                    <!-- Home -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'main.php'; ?>>Главная<span class="sr-only"></span></a></li>
                    <!-- / Home -->
                    <!-- News -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'news.php'; ?>>Новости<span class="sr-only"></span></a></li>
                    <!-- / News -->
                    <!-- About -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'about.php'; ?>>О представительстве<span class="sr-only"></span></a></li>
                    <!-- / About -->
                    <!-- Russia & Taiwan -->
                    <li class="dropdown">
                        <a style="color:black;" href=<?php echo $langFolder. 'russia_and_taiwan.php'; ?> class="dropdown-toggle" data-toggle="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
		  Россия и <br>Тайвань<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="row">
                                <!-- Culture -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Экономика</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Мероприятия</a></li>
                                </div>
                                <!-- Education -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Культура и образование</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Обучение в России</a></li>
                                </div>
                            </div>
                            <!-- / .row -->
                        </ul>
                        <!-- / .dropdown-menu -->
                    </li>
                    <!-- / Russia & Taiwan -->
                    <!-- Consular Information -->
                    <li class="dropdown">
                        <a style="color:black;" href=<?php echo $langFolder. 'consular.php'; ?> class="dropdown-toggle" data-toggle="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
		  Консульские<br>Вопросы<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="row">
                                <!-- Reccomendations -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Рекоммендации</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Миграционные<br><br>правила<br><br>Тайваня</a></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Медицинская<br><br>помощь</a></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Правила<br><br>пребывания на<br><br>Тайване</a></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Если Вы стали<br><br>жертвой<br><br>преступления</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">В случае<br><br>задержания или<br><br>ареста</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Перевод<br><br>денежных<br><br>средств</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Перемещение<br><br>через границу<br><br>гробов с телами<br><br>и урн с прахом<br><br>умерших</a></li>
                                </div>
                                <!-- Consular -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Консульский Отдел</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Нотариат<br><br>документов</a></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">ЗАГС</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Виза в Россию</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Тарифы</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Загранпаспорт</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Легализация</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Вопросы<br><br>гражданства</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Консульский<br><br>учет</a></li>
									<li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Истребование<br><br>документов</a></li>
                                </div>
                            </div>
                            <!-- / .row -->
                        </ul>
                        <!-- / .dropdown-menu -->
                    </li>
                    <!-- / Consular Information -->
                    <!-- Additional Information -->
                    <li class="dropdown">
                        <a style="color:black;" href=<?php echo $langFolder. 'info.php'; ?> class="dropdown-toggle"  data-toggle="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">
		  Полезная<br>Информация<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="row">
                                <!-- Additional Information -->
                                <div class="col-lg-6 mb-sm-30">
                                    <li class="dropdown-header">Additional Information</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $langFolder. 'text_page.php'; ?>">Links</a></li>
                                </div>
                            </div>
                            <!-- / .row -->
                        </ul>
                        <!-- / .dropdown-menu -->
                    </li>
                    <!-- / Additional Information -->
                    <!-- Contacts -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'contacts.php'; ?>>Контакты<span class="sr-only"></span></a></li>
                    </li>
                    <!-- / Contacts -->
                </ul>
                <!-- / .nav .navbar-nav -->
            </div>
            <!-- Navbar Links Right -->
            <div class="col-xs-3">
                <ul class="nav navbar-nav navbar-right" style="font-size: 11px;">
                    <!-- FAQ -->
                    <li><a style="color:black;" href=<?php echo $langFolder. 'faq.php'; ?>>FAQ<span class="sr-only"></span></a></li>
                    </li>
                    <!-- / FAQ -->
                    <!-- Search -->
                    
                    <li class="dropdown">
                        <a style="color:black;" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i> Поиск</a>
                        <ul class="dropdown-menu search-dropdown" style="width:325px">
                            <li>
                                <style type="text/css">
                                .gsc-control-cse .gsc-table-result {
                                    font-family: inherit;
                                }
                                
                                .gsc-control-cse .gsc-input-box {
                                    height: inherit;
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
                                    margin-top: 0px;
                                }
                                .gsib_b, .gsst_b, .gsst_a, .gscb_a, 
                                #gsc-i-id1{
                                    padding: 0px 0px 0px 0px;
                                }
                                .navbar .navbar-nav .dropdown .dropdown-menu li .gsc-search-box a{
                                    padding: 0px 0px 0px 0px;
                                    line-height: normal;
                                }
                                .gscb_a{
                                    box-sizing: border-box;
                                    line-height: normal;
                                    margin-top: 0px;
                                    height: 27px;
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
                            <li><a href="#">Русский</a></li>
                            <li><a href=<?php echo $ch_href; ?>>中文</a></li>
                    </li>
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
