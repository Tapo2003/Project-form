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

                // Enable debugging and log output
                // $mail->SMTPDebug = 3; // Enable verbose debug output (0 = off, 1 = errors, 2 = verbose, 3 = detailed)
                // $mail->Debugoutput = function ($str, $level) {
                //     file_put_contents('phpmailer_debug.log', date('Y-m-d H:i:s') . " [{$level}]: {$str}\n", FILE_APPEND);
                // };

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


