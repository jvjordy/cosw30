<?php

//Capture the data from our form
$email = $_POST ['email'];
$password = $_POST['password'];


//Create variables to match our email and password against 
$correct_email = 'test@test.com';
$correct_password = 'supersecure123';


if($email == $correct_email && $password == $correct_password) {
    //Successful - output a success message
    echo '<h1> You logged in successfully! </h1>';
    echo "<p> Email Address: $email</p>";
    echo "<p> Password: $password</p>";
}
else {
// Error - output an error message
echo '<h1> Sorry try again</h1>';
echo '<a href = "login.php"> Go back</a>';
}


?>