<?php 
    if (isset($_POST["submit"])){

        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        print_r($firstname);
        $lastname= filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
        print_r($lastname);
        $validate_field = true;

    };
?>
