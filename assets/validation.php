<?php 
    require 'assets/email/vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $msg = ["", "", "", "", ""];

    if (isset($_POST["submit"])){

        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname= filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $gender = $_POST['gender'];
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $country = $_POST['country'];
        $subject= $_POST['subject'];
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        $validates_fields = true;

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false || empty($email)){
            $validates_fields = false;
            $msg[3]= "Your email is not correct.";
        };
        if (empty($firstname)) {
            $validates_fields = false;
            $msg[0] = "Your first name is not correct.";
        };
        if (empty($lastname)) {
            $validates_fields = false;
            $msg[1] = "Your last name is not correct.";
        }
        if (empty($message)) {
            $validates_fields = false;
            $msg[4]= "Your message is not filled in.";

        }
        if ((isset($gender)) && ($gender !== null)) {
            $gender1 = ($gender == "man") ? "checked" : "";
            $gender2 = ($gender == "woman") ? "checked" : "";
            } else {
                $validates_fields = false;
                $msg[2] = "The gender field is not filled in.";
                }
                if ($_POST['website'] != "") {
                    $validates_fields = false;
                    echo 'Bip ?';
                };

        //var_dump($validates_fields);

        if ($validates_fields === true) {
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp-mail.outlook.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'adrien-test-code@outlook.com';                     
        $mail->Password   = 'adrien1997';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                    
        //Recipients
        $mail->setFrom('adrien-test-code@outlook.com');
        $mail->addAddress($email,"$firstname $lastname");     //Add a recipient
        $mail->addReplyTo('info@example.com', 'Information');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'hacker poulette';
        $mail->Body    = "Dear $firstname<br> thanks for your feedback.<br> we treat your demand as soon as possible<br><br> Firstname: $firstname <br> lastname: $lastname <br> Gender: $gender <br> Email: $email <br> Country: $country <br> Subject: $subject <br> Message: $message";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    };
};    
?>