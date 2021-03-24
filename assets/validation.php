<?php 
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
            # code...
        }
    };

?>
