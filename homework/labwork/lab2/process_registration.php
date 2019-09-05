<?php

//Capture the data from our form
$password = $_POST ['password'];
$confirm_password = $_POST['confirm_password'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];


if (empty($first_name || $last_name || $email || $password || $confirm_password )) {
    echo '<h1> Fill in all fields </h1>';
    echo '<a href = "registration.php"> Go back</a>';
}
elseif (!empty($password && confirm_password) && $password == $confirm_password) {
    //Successful - output a success message
    echo '<h1> You successfully created an account! </h1>';
    echo "<p> First Name: $first_name </p>";
    echo "<p> Last Name: $last_name </p>";
    echo "<p> Email Address: $email</p>";
}

else {
// Error - output an error message
echo '<h1> Passwords do not match </h1>';
echo '<a href = "registration.php"> Go back</a>';
}

/*
if (empty($first_name)) {
    echo '<h1> First name is empty </h1>';
echo '<a href = "registration.php"> Go back</a>';
} else {
    
}
*/

?>