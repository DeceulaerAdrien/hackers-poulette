<?php 

if (isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
}
else {
    $firstname = "";
    print_r($firstname);
    echo $firstname;
    
};?>



