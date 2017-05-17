<?php 

if(isset($_POST['email'])) {
 
     
 
    // ADD YOUR EMAIL WHERE YOU WANT TO RECIEVE THE MESSAGES
 
    //$email_to = "yanina.kalinicheva@gmail.com";

    $subject = $_POST['subject-option'];
 
    $email_subject = "MTC - Contact Form - ".$subject;

    $lang = $_POST['lang'];
     
 
    function died($error) {
 
        // your error code can go here
      global $lang;

      if ($lang == 'ch') {

        echo '<div class="alert alert-danger alert-dismissible wow fadeInUp" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>有東西出錯了:</strong><br>';
        echo $error."<br />";
 
      } else if ($lang == 'en') {

        echo '<div class="alert alert-danger alert-dismissible wow fadeInUp" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Something is wrong:</strong><br>';
        echo $error."<br />";

      } else if ($lang == 'ru') {

        echo '<div class="alert alert-danger alert-dismissible wow fadeInUp" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Что-то не так:</strong><br>';
        echo $error."<br />";
      }
      
      echo '</div>';
 
      die();
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
  
        !isset($_POST['email']) ||
 
        // !isset($_POST['phone']) || // un-commet for required
 
        !isset($_POST['message']) ||

        $_POST['name'] == "" ||

        $_POST['email'] == "" ||

        $_POST['message'] == "") {

          global $lang;
 
          if ($lang == 'ch') {

            died('很抱歉，您傳送的表單發生了一些問題，請確認所有欄位均填寫正確');

          } else if ($lang == 'en') {

            died('We are sorry, but there appears to be a problem with the form you submitted.');
          
          } else if ($lang == 'ru') {

            died('Извините, но возникли проблемы с заполнением формы.');
          
          }       
 
    }
 
     
 
    $name = $_POST['name']; // required
  
    $email_from = $_POST['email']; // required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    global $lang;
    if($lang == "ch") {

      $error_message .= '您輸入的電子郵件地址格式有誤ˋ.<br />';

    } else if ($lang == "en") {

      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

    } else if ($lang == "ru") {

      $error_message .= 'Указанный адрес электронной почты недействителен.<br />';

    } 
 
 
  }
 
    $string_exp1 = "/^[A-Za-z .'-]+$/";
    $string_exp2 = "/^[\x{4e00}-\x{9fa5}]{2,5}$/u"; 
    $string_exp3 = "/^[а-яА-ЯЁё ]+$/";
 
  if(!preg_match($string_exp1,$name) && !preg_match($string_exp2,$name) && !preg_match($string_exp3,$name)) {
    global $lang;
    if($lang == "ch") {

      $error_message .= '您輸入的名字格式有誤ˋ.<br />';

    } else if ($lang == "en") {
 
      $error_message .= 'The First Name you entered does not appear to be valid.<br />';

    } else if ($lang == "ru") {
 
      $error_message .= 'Введенное имя недействительно.<br />';
    }
 
  }
 
  if(strlen($message) < 2) {
    global $lang;
    if($lang == "ch") {

      $error_message .= '您輸入的內容格式有誤ˋ.<br />';

    } else if ($lang == "en") {
 
      $error_message .= 'The message you entered do not appear to be valid.<br />';
    
    } else if ($lang == "ru") {
 
      $error_message .= 'Введенное сообщение недействительно.<br />';
    }
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
  
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

if ($subject == "Other") {

  mail("info@mtc.org.tw", $email_subject, $email_message, $headers);  

} elseif ($subject == "Другое") {

  mail("info@mtc.org.tw", $email_subject, $email_message, $headers);  
  
} elseif ($subject == "Consular") {

  mail("c@mtc.org.tw", $email_subject, $email_message, $headers);  
  
} elseif ($subject == "Консульские вопросы (паспорта, справки, визы, легализация)") {

  mail("c@mtc.org.tw", $email_subject, $email_message, $headers);  

} elseif ($subject == "Culture and education") {

  mail("a@mtc.org.tw", $email_subject, $email_message, $headers);  
  
} elseif ($subject == "Вопросы культуры и образования") {

  mail("a@mtc.org.tw", $email_subject, $email_message, $headers);  
  
} elseif ($subject == "Trade and economic") {

  mail("e@mtc.org.tw", $email_subject, $email_message, $headers);  
 
} elseif ($subject == "Торгово-экономические вопросы") {

  mail("e@mtc.org.tw", $email_subject, $email_message, $headers);  
  
}

if($lang == "ch") {
    ?>

  <div class="alert alert-success alert-dismissible wow fadeInUp" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    您的訊息已寄出.
  </div>

  <?php

} elseif($lang == "en") {
  ?>

  <div class="alert alert-success alert-dismissible wow fadeInUp" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Your message has been sent.
  </div>

 <?php

} elseif($lang == "ru") {
  ?>

  <div class="alert alert-success alert-dismissible wow fadeInUp" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Ваше сообщение отправлено.
  </div>

 <?php
}

  } ?>