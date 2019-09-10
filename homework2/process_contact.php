<?php

//Capture the data from our form

$submit = $_POST ['contact.html'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$gender = $_POST ['gender'];

echo '<h1> Thank you for supporting Steve Carrell.</h1>';
echo '<h2> See your confirmation below.</h2>';

echo "<p> First Name: $first_name </p>";
    echo "<p> Last Name: $last_name </p>";
echo "<p> Email Address: $email</p>";
echo "<p> Gender: $gender </p>";

echo '<a href = "contact.html"> Return to form</a>';


?>