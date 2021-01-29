<?php
SESSION_START();
include('process.php');
?>

<!DOCTYPE html>
<html lang = "en_US">
<head>
	<title> Metro Mall</title>
<link rel="stylesheet" type="text/css" href="css/user.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>
<body>

<h3  align= "right" style="  padding:2px; color:darkblue; margin-bottom:0px; "> <a href="adminlogin.php"> Admin Login </a></h3>

<hr>
<div class="login-wrap">
	<div class="login-html">
<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

		<div class="login-form">
			<form method= "post" action="validation.php" >
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" name="email" type="email" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				

				<div class="group">
  <button type="submit" name= "signin" value= "signin" class="button">Sign In</button>
</div>

    </form> 
			<hr>
			<br>
			<div class="foot-lnk" align= "right" >
					
					

				</div>
<br>     						<div class="foot-lnk">
		
				</div>
								
			</div>
	<form method= "post" action="validation.php" target="_blank">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name="name" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password" required>
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" name="email" type="email" class="input" required>
				</div>
<div class="group">
  <button type="submit" name= "signup" value= "signup" class="button">Sign Up</button>
</div>

    </form> 



				<hr>
			<br>
			<div class="foot-lnk" align= "right" >
					
					<a class="button" style=" color: white; background-color: royalblue; border: 10px solid 	royalblue; border-radius: 12px" href="index.php">Home  </a>

				</div>
   
				

					
		</div>
	</div>


</body>
</html>

<?php
include('validation.php');
?>



