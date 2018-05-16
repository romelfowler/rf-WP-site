

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RF - Confirmation</title>
		<link href="https://fonts.googleapis.com/css?family=Amaranth:700|Raleway:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../../css/style.css" />
	</head>
	<body>
		<?php
		if ($_POST["submit"]) {
			$result = '<div class="result"><h2>Form Submitted!</h2></div>';

			if(!$_POST['name']){
				$error.="<br/> *Name Field";
			}
			if(!$_POST['email']){
				$error.="<br/> *Email Field";
			}
			if(!$_POST['phone']){
				$error.="<br/> *Phone Field";
			}
			if(!$_POST['message']){
				$error.="<br/> *Message Field";
			}
			// Jquery Validator to check if it's not an email address
			if (  $_POST['email'] !="" AND !filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)  ) {
				$error .="<br/> Please enter a valid email address";
			}
			if($error){
				$result = '<div class="result danger"><h2>OH NO! We Got Error(s)!</h2><h3> Please
				enter the following fields to submit the form:</h3>' .$error. '</div>';
			} else {

				// Check to see if it was successful sending
				if (mail("info@rommelfowler.com", "Rommel Fowler Website Email",
				" Name: " .$_POST['name'].
				 " Email: " .$_POST['email'].
				 " Comment: " .$_POST['message']) ) {
					$result = '<div class="result"><h2>Many Thanks For Your Email!</h2></div>';
				} else {
					$result = '<div class="result"><h2>There was an error sending your message. Please try again later.</h2></div>';

				}
			}
		}
		 ?>
		 <style media="screen">

 		</style>
		 	<section id="email" class="email data-content container-flex">
				<div class="email-response">
					<?php echo $result; ?>

				</div>


				<button type="button" name="button"><a href="//www.rommelfowler.com">Back To Rommel Fowler</a> </button>

		 	</section>

		 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
