<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Redirect Page' />
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Representative Office of the MTC in Taipei</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="Office_small_logo.gif">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/styles/vendor/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="assets/fonts/et-lineicons/css/style.css">
        <link rel="stylesheet" href="assets/fonts/linea-font/css/linea-font.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="assets/styles/vendor/slick.css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="assets/styles/vendor/magnific-popup.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="assets/styles/vendor/animate.css">


        <!-- Definity CSS -->
        <link rel="stylesheet" href="assets/styles/main.css">
        <link rel="stylesheet" href="assets/styles/responsive.css">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- Detect Language -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
        <script type="text/javascript">
        try {
          var switchPage = function (language) {
            switch (language) {
              case 'ru':
              case 'ru-ru':
                window.location.href = 'ru/main.php';
                return true;
                break;

              case 'zh':
              case 'zh-tw':
                window.location.href = 'ch/main.php';
                return true;
                break;
         
              case 'en':
                window.location.href = 'en/main.php';
                return true;
                break;
         
              default:
                window.location.href = 'en/main.php';
                return true;
                break;
            }
            return false;
          };
         
          // detect window.navigator.languages
          var found = false;
          if (typeof(window.navigator.languages) === 'object') {
            for (var index in window.navigator.languages) {
              console.log(window.navigator.languages[index].toLowerCase());
              found = switchPage(window.navigator.languages[index].toLowerCase());
              if (found) break;
            }
          }
         
          if (!found) {
            var lang = window.navigator.userLanguage || window.navigator.language;
            var relang = lang.toLowerCase();
            found = switchPage(relang);
          }
         
          if (!found) {
            window.location.href = '/en' + window.location.pathname;
          }
        } catch (e) {
          window.location.href = '/en' + window.location.pathname;
        }
        </script>
    </head>
    <div></div>
</html>

<?php COUCH::invoke(); ?>