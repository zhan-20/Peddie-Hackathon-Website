<?php ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>PeddieHacks</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="./registration.css">
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
	
<script src="sign_up.js"></script>
<body>
<h1 class="head">Signing Up</h1>
	<form class="pure-form-stacked" method="post" action="sign_up.php" accept-charset='UTF-8'>
        <fieldset>
		<div class="container">
		<hr>
		<label for="email"><b>Email</b><span class="required">*</span></label>
		<input id="account" type="text" placeholder="Enter Email" name="email" required></input>

        <label for="teamname"><b>Team Name</b><span class="required">*</span></label>
		<input id="teamname" type="text" placeholder="Enter Team Name" name="teamname" required></input>
        
        <label for="leader"><b>Team Leader/Chaperone</b><span class="required">*</span></label>
		<input id="leader" type="text" name="leader" placeholder="Enter Name" required></input>
		
        <label for="member1"><b>Team Member #1</b><span class="required">*</span></label>
		<input id="member1" type="text" name="member1" placeholder="Enter Name" required></input>
		
        <label for="member2"><b>Team Member #2</b></label>
		<input id="member2" type="text" name="member2" placeholder="Enter Name"></input>

        <label for="member3"><b>Team Member #3</b></label>
		<input id="member3" type="text" name="member3" placeholder="Enter Name"></input>

        <label for="Permission Form"><b>Permission Form Signed for All Members?</b><span class="required">*</span></label>
		<input id="permit" type="text" name="permit" placeholder="Yes/No" required></input>
		</hr>
		<button type="submit" class="register" name="login_user" method="post">Sign Up</button>
	</div>
    </fieldset>
	</form>
</body>
</html>

