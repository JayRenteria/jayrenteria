<?php
require_once("../php/lib/header.php");
?>

<link type="text/css" href="../css/style.css" rel="stylesheet"/>

<div class="container">

	<!-- The div class="form-wrap" is the black box containing the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->
	<div class="col-xs-12 col-md-6 form-wrap">

		<h1 class="h1">Contact Me</h1>
		<br>
		<!-- Form is centered within it's container, and is set to 10 be columns wide RELATIVE TO IT'S CONTAINER, and offset to the right by one column. See classes: col-xs-offset-1 & col-xs-10 -->
		<form method="get" action="#" id="sample-form" class="form-horizontal col-xs-10 col-xs-offset-1">

			<div class="form-group">
				<!-- Labels for each field are places within a <label> tag. Use the "for" attribute. the class="control-label" is for styling. -->
				<label for="yourName" class="control-label">Name</label>
				<!-- the div class="input-group" contains both the text field and the icon to the left -->
				<div class="input-group">
					<!-- this div and span contains the glyphicon to the left. aria-hidden is so that screen readers don't read this element -->
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<!-- text field input. pay attention to the id, placeholder text, type, and placeholder attributes -->
					<input type="text" class="form-control" id="yourName" name="yourName" placeholder="Your name here." maxlength="150" />
				</div>
			</div>

			<div class="form-group">
				<label for="email1" class="control-label">Email</label>
				<div class="input-group">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<input type="email" id="email1" name="email" class="form-control" maxlength="150" placeholder="your.email@something.com"/>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label" for="msg">Tell Us More About Yourself:</label>
				<textarea class="form-control" rows="5" id="msg" name="msg" maxlength="500" placeholder="500 characters max."></textarea>
			</div>

			<div class="form-group">
				<!-- the following <a> tag has been styled as a button with class="btn" -->
				<a id="reset-form" class="btn" role="button">Reset Form</a>
				<button type="submit" class="btn">Submit</button>
			</div>
		</form>
		<h3><?php include "../php/send-mail/send-mail.php"?></h3>

	</div> <!-- CLOSE FORM WRAP -->
</div>

<?php
require_once("../php/lib/footer.php");
?>