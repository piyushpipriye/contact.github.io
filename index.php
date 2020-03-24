<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="gmail.css" rel="stylesheet">
</head>

<body>    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>CONTACT US</h2>
          <p>Parth Arts and Science College, Ner, Rathod Nagar District: Jalna</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>R.P.Road, Near Dadhi Mati Mata<br>Mandir Jalna </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">9763131436</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">pipriyepiyush00@gmail.com</a></p>
            </div>
          </div>

        </div>
<div class="form">
          <form action="" method="post" role="contactform" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="sub" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button name="send" type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </section><!-- #contact -->
</body>
</html>
<?php
if(isset($_POST['send']))  
    {  
$name=$_POST['name'];
$fmail=$_POST['email']; 
$sub=$_POST['sub'];
$msg=$_POST['msg'];
// Load Composer's autoloader
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true); 

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = your gmail-id // SMTP username
    $mail->Password   = your password                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($fmail,$name);
	$mail->addReplyTo($fmail,$name);
    $mail->addAddress('cntctdemo@gmail.com');     // Add a recipient
    
    // Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = $sub;
    $mail->Body    = $msg;

    $mail->send();
    echo "<script>alert('Message has been sent')</script>";
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent.')</script>";
  }
}
?>