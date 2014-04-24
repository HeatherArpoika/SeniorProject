<?php session_start(); 
	//redirect to profile if already logged in.
	//if ($_SESSION['logged']==1) header( 'Location: profile.php?user='.$_SESSION['id'] );
?>
<?php include 'head.php'; ?>
<body>
	<?php include 'nav.php'; ?>
	<br>
	<div class='row' id='registered'>
		<div class='small-10 small-offset-1 medium-8 medium-offset-2 small-centered column text-center'>
			Thank you for registering! An email has been sent to you with instructions for verifying your account.
		</div>
	</div>
	<div class="row">
		<div class="small-10 small-offset-1 medium-6 medium-offset-3 large-4 large-offset-4 small-centered column">
			<form id="loginform" method='post' action='register.php' data-abide='ajax'>
			<fieldset>
    		<legend id='legend'>Log-In</legend>
			<div class="row">
    			<div class="small-12 columns">
					<input type="checkbox" name="register">
					<label class="content-left" id="l-register" for="register"> Don't have an account yet?</label>
				</div>
			</div>
			<div class="row">
			    <div class="small-12 columns">
					<label id="l-name">Name
					<input type="text" pattern="alpha" name="name">
					</label>
				</div>
			</div>
			<div class="row">
			    <div class="small-12 columns">
					<label id="l-email">Email
					<input type="text" pattern="email" name="email" required>
					</label>
					<small class="error">A valid email is required.</small>
				</div>
			</div>
			<div class="row">
			    <div class="small-12 columns">
					<label id="l-password">Password
					<input type="text" pattern="alpha_numeric" name="password" required>
					</label>
					<small class="error">Passwords are alpha-numeric.</small>
				</div>
			</div>
			<div class="row">
			    <div class="small-12 columns">
					<button class="small radius button" type="submit" id="login">Log-In</button>
				</div>
			</div>
			</fieldset>
			</form>
		</div>
	</div>

<?php include 'jsincludes.php'; ?>
<script>
$('input[name="name"]').hide();
$("#l-name").hide();
$('#registered').hide();

$( 'input[name="register"]' ).click(function() {
	if ($('input[name="register"]').is(':checked')) {
		$('#login').html("Register");
		$('#legend').html("Register");
		$('input[name="name"]').show();
		$("#l-name").show();
	}
	else {
		$('#login').html("Log In");
		$('#legend').html("Log-In");
		$('input[name="name"]').hide();
		$("#l-name").hide();
	}
});

$('#loginform').on('valid', function () {
	var register = $('input[name="register"]').is(':checked');
    var name = $('input[name="name"]').val();
    var email = $('input[name="email"]').val();
    var password = $('input[name="password"]').val();
    var dataString = 'register=' + register +
    	'&name=' + name +
        '&email=' + email +
        '&password=' + password;

    $.ajax({
		type:"POST",
		url:"register.php",
		data: dataString,
		success: function (){
			if (register) {
				$('#loginform').hide();
				$('#registered').show();
			}
			else {
				window.location = "profile.php";
			}
		}
	});
});
</script>
</body>