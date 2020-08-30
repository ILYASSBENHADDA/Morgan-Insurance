<?php include_once('sections/header.php'); ?>

<?php
        $alert = "";
        if (isset($_POST['contact'])) {
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            $mailTo = "??????";
            $headers = "From :". $email;
            $txt = "you have received an e-mail from ".$fname." ".$email.".\n\n".$message;

            if (strlen($fname)<2){

                $alert = "<div class='alert alert-danger'>your first name is too short</div>";
    
            }else if (strlen($subject)<2){

                $alert = "<div class='alert alert-danger'>your subject is too short</div>";
    
            }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

                $alert = "<div class='alert alert-danger'>your email format is invalid</div>";
    
            }else if ($message == ""){

                $alert = "<div class='alert alert-danger'>message field should not be empty</div>";
    
            }else{

                require 'PHPMailer/PHPMailerAutoload.php';

                    $mail = new PHPMailer;

                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = '!!!!!!!!!';                 // SMTP username
                    $mail->Password = '!!!!!!!!';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    $mail->setFrom($email);
                    $mail->addAddress('?????????');     // Add a recipient
                 

                    
                    $mail->isHTML(true);                                  // Set email format to HTML

                    $mail->Subject = $subject;
                    $mail->Body    = $txt;
                   

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        $alert = "<div class='alert alert-success'>your message has been sent successfully</div>";
                    }
            }   
        }
    ?>
<div class="conpa">
            <div class="con titleg col-lg-12">
                <h2>Contact</h2>
                <hr class="line-heading">
            </div>
            <div class="col-lg-12"> 
                <div id="add_err2"></div>
                    <form role="form" action ="contact.php" method = "post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Subject</label>
                                <input type="text" id="subject" name="subject" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="contact" name="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d843.6387264582185!2d-8.537100170782821!3d32.24314899882102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDE0JzM1LjMiTiA4wrAzMicxMS42Ilc!5e0!3m2!1sen!2sma!4v1598693098266!5m2!1sen!2sma" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
</div>
<?php include_once('sections/footer.php'); ?>