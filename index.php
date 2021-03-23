<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hacker-poulette page de contact,formation php Becode">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/150ae06f6f.js" crossorigin="anonymous"></script>
    <title>Hackers-poulette</title>
</head>
<body>
    <header>
        <nav>
            <div class="navbar">
                <h1>Hacker-poulette</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="logo">
            <img src="assets/image/hackers-poulette-logo-neg.png" alt="logo de l'entreprise Hackers-poulette" draggable="false">
        </div>
        <div class="blockform">
            <div class="form">
                <form action="index.php" method="POST">
                    <div class="grpnames">
                    <div class="fname">
                        <label for="firstname">Firstname: </label><br>
                        <input type="text" name="firstname" id="firstname" value="<?php echo $_POST["firstname"]; ?>">
                    </div>
                    <!-- PhP firstname -->
                    <?php 
                        if (isset($_POST["firstname"])){
                            $firstname = $_POST["firstname"];
                            print_r($firstname);
                        };
                    ?>
                    <div class="lname">
                        <label for="lastname">Lastname: </label><br>
                        <input type="text" name="lastname" id="lastname" value="<?php echo $_POST["lastname"]; ?>">
                    </div>
                    <!-- PhP lastname -->
                    <?php
                        if (isset($_POST["lastname"])) {
                            $lastname = $_POST["lastname"];
                            print_r($lastname);
                        };
                    ?>
                    </div>
                    <div class="gender">
                        <label for="gender">Gender: </label><br>
                        <input type="radio" name="gender" id="man" value="man"><label for="man">Man</label><br>
                        <input type="radio" name="gender" id="woman" value="woman"><label for="woman">Woman</label> <br>
                    </div>
                    <!-- PhP gender -->
                    <?php
                        if (isset($_POST["gender"])) {
                            $gender = $_POST["gender"];
                            print_r($gender);
                        };
                    ?>
                    <div class="email">
                        <label for="email">Email: </label><br>
                        <input type="email" name="email" id="email">
                    </div>
                    <!-- PhP email -->
                    <?php
                        if (isset($_POST["email"])) {
                            $email = $_POST["email"];
                            print_r($email);
                        };
                    ?>

                    <div class="grpform">
                    <div class="country">
                        <label for="country">Country: </label><br>
                        <select name="country" id="country">
                            <optgroup label="Europe">
                                <option value="Belgium">Belgium</option>
                                <option value="France">France</option>
                                <option value="Netherlands">Netherlands</option>
                            </optgroup>
                            <optgroup label="Asie">
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                                <option value="SouthK">South Korea</option>
                            </optgroup>                            
                        </select>
                    </div>
                    <div class="subject">
                        <label for="subject">Subject: </label><br>
                        <select name="subject" id="subject">
                            <option value="info">informations</option>
                            <option value="refund">refund</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    </div>
                    <div class="message">
                        <label for="message">Message: </label><br>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="submitButton">                    
                        <input type="submit" value="submit" class="submit">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <nav>
            <div class="navbar">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                </ul>
            </div>
        </nav>
    </footer>
</body>
<script src="./assets/script/script.js"></script>
</html>

