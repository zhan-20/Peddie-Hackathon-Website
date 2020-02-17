<?php
//if (isset($_POST['login_user'])) {
$emailuser=$_POST['email'];
    require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$mail=new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'peddiehacks@gmail.com';                // SMTP username
$mail->Password = 'peddiecsclub';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->From = 'peddiehacks@gmail.com';
$mail->FromName = 'Peddie School CompSci Club';
$mail->AddAddress($emailuser);  // Add a recipient            

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Body=@"Email sent from Peddie School Computer Science Club "."at ".date("d/m/y H:i", time())."<br />
         <hr />"."Thank you for your interest in Peddie School Hackathon 2020! To
      finish your registration, please click on the following link and verify your email account."."<a href='localhost/registration.php' action>Finish Registration (account info confirmation)<a>"."<hr />";

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
//}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="sign_up.css">
<head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<hr>
<div class="first">
		<label for="email"><b>Email</b><span class="required">*</span></label>
		<input id="account" type="text" placeholder="Enter Email" name="email" required></input>
        <button type="submit" class="register" name="login_user" method="post">Sign Up</button>
</div>
        <hr>
</form>
</head>
<body>
<div class="second"><p>Once you enter your email address we will send a link to your email address. Please open that email, click on the link to finish your registration</p></div>
<div class="second"><p>If you have any questions, please email peddiehacks@gmail.com.</p></div>
</body>
</html>