<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "hodgsonjohn007@gmail.com";
     
    $email_subject = "from lancashire k9 website";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
<html lang="en">
<!--[if lt IE 7]> <html lang="en-us" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en-us" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en-us" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Contact Lancashire K9 Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Canine breeding services available throughout the Lancashire area">
    <meta name="author" content="Craig Stephen, http://craigstephen.co.uk, Twitter Bootstrap">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>

    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-40902566-1', 'lancashirek9services.com');
    ga('send', 'pageview');

    </script>

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.9.1.min.js"><\/script>')</script>

    <!-- Steez -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
    <div class="container">
      <div class="main-container">

        <!-- /header -->
        <header>
          <div class="row-fluid">
            <div class="span12">
              <img class="logoheader" src="assets/img/lancashirek9serviceslogo.png" height="272" width="1150px" title="Welcome to Lancashire K9 Services" alt="Lancashire K9 Services logo">
            </div>
          </div>
        </header><!-- /header -->

      <div class="hrsimple"></div>

        <div class="navbar">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">Menu
              </a>
              <div class="nav-collapse collapse">
                <div class="navbar-inner">
                  <div class="container">
                    <ul class="nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="artificialinsemination.html">Artificial Insemination</a></li>
                      <li><a href="matingassistance.html">Mating Assistance</a></li>
                      <li><a href="puppyscanning.html">Puppy Scanning</a></li>
                      <li class="active"><a href="contact.html">Contact</a></li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>

      <hr>

        <!-- /.row -->
        <div class="row-fluid">
          <div class="span12">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps/ms?msa=0&amp;msid=203906038769453716365.0004dbbec14045d8714cb&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=53.918899,-2.714996&amp;spn=0.28307,1.098633&amp;z=10&amp;iwloc=0004dbbecea64fa41ccfd&amp;output=embed"></iframe>
          </div>
        </div><!-- /.row -->

      <hr>

        <!-- /.row -->
        <div class="row-fluid">
          <div class="span9">
            <h1>Contact Us</h1>
          </div>
          <div class="span3">
            <a class="btn btn-large padd-top pull-right" href="https://maps.google.co.uk/maps/ms?msa=0&msid=203906038769453716365.0004dbbec14045d8714cb&hl=en&ie=UTF8&t=m&ll=53.918899,-2.714996&spn=0.28307,1.551819&z=10&vpsrc=0&iwloc=0004dbbecea64fa41ccfd&f=d&daddr=Lancashire+K9+Services+%4053.808038,-2.827649">Get Directions &raquo;</a>
          </div>
        </div><!-- /.row -->

      <hr>

        <!-- /.row -->
        <div class="row-fluid">
          <div class="span12">
            <div class="alert alert-success">
              Congratulations, you have sent us a message. We will get back to you shortly.
            </div>
          </div>
        </div><!-- /.row -->

      <hr>

        <!-- /.row -->
        <div class="row-fluid">
          <div class="span8">
            <form name="htmlform" method="post" action="html_form_send.php">
              <fieldset>
                <input type="text" id="name" name="first_name" class="input-block-level" placeholder="First Name">
                <input type="text" id="email" name="last_name" class="input-block-level" placeholder="Last Name">
                <input type="text" id="email" name="email" class="input-block-level" placeholder="Email">
                <input type="text" id="name" name="telephone" class="input-block-level" placeholder="Telephone">
                <textarea rows="3" id="comments" name="comments" class="input-block-level" placeholder="Enquiry / Message"></textarea>
                <button type="submit" value="submit" class="btn pull-right">Submit</button>
              </fieldset>
            </form>
          </div>
          <div class="span4">
            <p>If you would like to get in touch, we have 2 options: Fill out the free form to the left (we will endeavor to reply within 24 hours) or call us on the number below.</p>
            <blockquote style="margin-top:26px;">
            <address>
              <strong>Lancashire K9 Services</strong><br>
              Stanley Lodge Farm<br>
              Salwick Road, Wharles<br>
              Preston, PR43SN<br>
              Lancashire.<br><br>
              <strong>John Edward</strong><br>
              <abbr title="Email Address">E:</abbr> john@lancashirek9services.com<br>
              <abbr title="Mobile Number">M:</abbr> (07870) 376729
            </address>
            </blockquote>
          </div>
        </div><!-- /.row -->

      <hr>

        <!-- /footer -->
        <div class="footer">
          <div class="row-fluid">
            <div class="span6">
              <p class="text-left">&copy; Lancashire K9 Services 2013</p>
            </div>
            <div class="span6">
              <p class="text-right">Design by <a href="http://craigstephen.co.uk" title="Web Design in Preston Lancashire, North West UK">Craig Stephen</a></p>
            </div>
          </div>
        </div><!-- /footer -->

      </div><!-- /main-container -->
    </div><!-- /container -->

    <!-- Javascript
    ================================================== -->
    <script>
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 5000
        });
      });
    </script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
 
<?php
}
die();
?>