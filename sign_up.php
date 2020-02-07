<?php
if (isset($_POST['login_user'])) {
    $email=$_POST['email'];

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
$mail->AddAddress($email);  // Add a recipient            

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Body=@"Email sent from Peddie School Computer Science Club "."at ".date("d/m/y H:i", time())."<br />
         <hr />"."Thank you for your interest in Peddie School Hackathon 2020! To
      finish your registration, please click on the following link and verify your email account."."<a href='localhost/account.php' action>Finish Registration (account info confirmation)<a>"."<hr />";

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
}
?>
<!DOCTYPE html>
<html>

<style>
   body {
      background-color: black;
   }
   p, head, h3 {
      margin: auto;
      text-align: center;
      color: white;
   }
</style>

<head> <h3> Thank you very much for your interest! <h3> </head>
<body>
   <div><h3>We have sent a link to your email address. Please click on the link to finish your registration</h3></div>
   <div><h3>If you have any questions, please email peddiehacks@gmail.com.</h3></div>
</body>

<script src="./redirect.js"></script>
<script> 
    redirect(2750);
</script>

</html>