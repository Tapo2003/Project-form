<?php
    // Import PHPMailer classes
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Require Composer's autoloader 
    require 'vendor/autoload.php';

    Class customemailsender{
        public function emailSender($getemaildata){
            $mail = new PHPMailer(true); 
            // Enable exceptions for error handling
            try {
                // Server settings
                $mail->isSMTP();                                   
                $mail->Host       = $getemaildata['smtphost'];            
                $mail->SMTPAuth   = true;                         
                $mail->Username   = $getemaildata['username'];     
                $mail->Password   = $getemaildata['password'];        
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                $mail->Port       = 587;                          
            
                // Recipients
                $mail->setFrom($getemaildata['from'], $getemaildata['organization']); 
                $mail->addAddress($getemaildata['to'], $getemaildata['toname']); 
                $mail->addReplyTo($getemaildata['from'], $getemaildata['organization']); 
            
                // Content
                $mail->isHTML(true);                         
                $mail->Subject = $getemaildata['subject'];
                $mail->Body    = $getemaildata['body'];
                $mail->AltBody = 'This is a plain text.'; // For non-HTML mail clients
            
                // Send email
                return $mail->send();
            } catch (Exception $e) {
                return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }            
        }
    }
?>


