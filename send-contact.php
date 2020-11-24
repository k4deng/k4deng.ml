<?php
    include('includes/header1.php');
?>
	 
	 <title>K4denG | Thank You!</title>
	 <meta name="robots" content="noindex">
	 <meta name="language" content="English">
	 <meta name="author" content="K4denG">

	 <!-- TITLE AND FAVICON -->
	 <link rel="icon" type="image/png" href="/assets/favicon/favicon.ico"/>
	 
	 <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	 
</head>
<body>


<?php
$name    = $_POST['name'];
$phone   = $_POST['phone'];
$email   = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$formcontent = "Email: $email \n Phone: $phone \n Name: $name \n\n Subject: $subject \n\n Message: $message";
$recipient   = "contact@k4deng.ml";
$subject     = "K4denG.ml Contact Form Submission:";
$mailheader  = "From: 'K4denG NoReply' <no-reply@k4deng.ml>\r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo <<<HTML
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead">Your message has successfully been submitted!</p>
  <hr>
  <p>
    Having trouble? <a href="/home/#contact-us">Contact Me</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="/home/" role="button">Continue to homepage</a>
  </p>
</div>
HTML;
?>

    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>

  </body>
</html>