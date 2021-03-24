<?php 
require 'assets/email/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    if (isset($_POST["submit"])){

        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname= filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $gender = $_POST['gender'];
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $country = $_POST['country'];
        $subject= $_POST['subject'];
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        $validates_fields = true;

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $validates_fields = false;
        };

        var_dump($validates_fields);

        if ($validates_fields === true) {
//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               
    $mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
        };
    };    
?>