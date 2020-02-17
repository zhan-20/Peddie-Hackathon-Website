<?php ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./registration.css">
<style>
body{
	background-color: rgba(140, 140, 140, 0.6);
}
p.head{
	font: cursive;
	font-weight: bold;
	font-size: 125px;
	position: absolute;
    color: black;
	top: 0px;
	left: 250px;

}
.container{
	padding: 16px;
}
input[type=text], input[type=text] {
	width: 98%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
    text-align:left;
	border: solid;
    left:0px;
	background: yellow;
    opacity:0.4;
}
input[type=text]:focus, input[type=text]:focus{
	background-color: #ddd;
}
::placeholder{
   color:black;
   opacity:1;
}
form{
	position: absolute;
	top: 300px;
    color: grey;
    left:200px;
    right:200px;
}
.required {
  color: red;
}
.register
{
    background-color: #4CAF50; /* Green */
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  font-weight:bold;
}
</style>
<head>
	<p class="head">Signing Up</p>
</head>
<body>
<script src="sign_up.js"></script>
	<form class="pure-form-stacked" method="post" action="account.php" accept-charset='UTF-8'>
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
		<button type="submit" class="register" name="login_user" method="post" onclick="checkinput()">Sign Up</button>
	</div>
    </fieldset>
	</form>
</body>
<div class="background"></div>
</html>

