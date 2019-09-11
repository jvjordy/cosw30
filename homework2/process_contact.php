<?php

//Capture the data from our form

$submit = $_POST ['contact.html'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$contribution = $_POST['contribution'];
$newsletter = $_POST['newsletter'];
$comment = $_POST['comment'];

echo '<h1> Thank you for supporting Steve Carrell.</h1>';
echo '<h2> See your confirmation below.</h2>';

echo "<p> First Name: $first_name </p>";
    echo "<p> Last Name: $last_name </p>";
echo "<p> Email Address: $email</p>";
echo "<p> Gender: $gender </p>";
echo "<p> Age: $age </p>";


if(!empty($_POST['interest1'] || $_POST['interest2'] || $_POST['interest3'] || $_POST['interest4'] || $_POST['interest5'] || $_POST['interest6'] )){
$interest1 = $_POST['interest1'];
echo "$interest1<br>";
$interest2 = $_POST['interest2'];
echo "$interest2<br>";
$interest3 = $_POST['interest3'];
echo "$interest3<br>";
$interest4 = $_POST['interest4'];
echo "$interest4<br>";
$interest5 = $_POST['interest5'];
echo "$interest5<br>";
$interest6 = $_POST['interest6'];
echo "$interest6<br>";
}

echo "<p> Contribution: $contribution </p>";

if (!empty($comment)) {
echo "Thank you for your inquiry. We strive to respond within 3 business days. ";
}

echo '<a href = "contact.html"> Return to form</a>';

/*
if(!empty($_POST['interest1'])){
$interest1 = $_POST['interest1'];
echo "$interest1<br>";
}
if(!empty($_POST['interest2'])){
$interest2 = $_POST['interest2'];
echo "$interest2<br>";
}
if(!empty($_POST['interest3'])){
$interest3 = $_POST['interest3'];
echo "$interest3<br>";
}
if(!empty($_POST['interest4'])){
$interest4 = $_POST['interest4'];
echo "$interest4<br>";
}
if(!empty($_POST['interest5'])){
$interest5 = $_POST['interest5'];
echo "$interest5<br>";
}
if(!empty($_POST['interest6'])){
$interest6 = $_POST['interest6'];
echo "$interest6<br>";
*/




?>