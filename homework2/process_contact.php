<?php

//Capture the data from our form

$submit = $_POST ['contact.html'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];

echo "<p> First Name: $first_name </p>";
    echo "<p> Last Name: $last_name </p>";
echo "<p> Email Address: $email</p>";



?>