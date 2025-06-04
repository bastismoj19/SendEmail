<?php
    
    require  "./phpmailer/class.phpmailer.php";

    if (isset($_POST["sendBtn"])) {
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
 
        $mail = new PHPMailer(true);

        $smtpServer = "smtp.office365.com";
        $smtpPort = 587;
        $smtpUsername = "funaismtprelay@funai-cebu.com.ph";
        $smtpPassword = "P@ssw0rd@01"; 
       
        $mail->isSMTP();
        $mail->Host = $smtpServer;              
        $mail->SMTPAuth = true;                 
        $mail->Username = $smtpUsername;        
        $mail->Password = $smtpPassword;        
        $mail->SMTPSecure = 'tls';              
        $mail->Port = $smtpPort;                

        $mail->setFrom($smtpUsername, 'funaismtprelay@funai-cebu.com.ph');
        $mail->addAddress($_POST["email"]);
       
        $mail->isHTML(true);                     
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $_POST["message"];

        $mail->send();

        echo 'Email has been sent successfully';
    } else {
        echo "Email could not be sent.";
    }
?>