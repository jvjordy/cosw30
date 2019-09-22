<!doctype html>
<html>
    <head>
        <title>Tuition Results</title>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lora&display=swap" rel="stylesheet">
        <style>
             body {
                margin: 5% 5%;
            }
            h1 {
                font-family: 'Lora', serif;
            }
            p {
                    font-family: 'Crimson Text', serif;
                    font-size: 18px;
                }
        </style>
</head>
<body>
    

<?php

$resident = $_POST['resident'];
$units = $_POST['units'];
$csc = $_POST['csc'];
$parking = $_POST['parking'];
$mandatory = 20;
$tuition = 0;


echo "<h1>Long Beach City College Cost Summary</h1>";


if ($resident == 46) {
$tuition = ($units * 46) + ($csc) + ($parking) + ($mandatory);
    echo "<p>Resident Tuition Cost: $".($units * 46) ."</p>";
}
else {
    $tuition = ($units * 265) + ($csc) + ($parking) + ($mandatory);
     echo "<p>Non-resident Tuition Cost: $".($units * 265) ."</p>";
}
$scholarship = rand(0, $tuition);


echo "<p>Student Health Fee: $".$mandatory ."</p>";

echo "<p>College Services Card: $".$csc ."</p>";

echo "<p>Parking Permit: $".$parking ."</p>";

echo "<p><b>Total Registration Cost: $" .$tuition ."</p></b>";

echo "<p>Scholarship Award: $".$scholarship ."</p>";

echo "<p>Total Balance Due: $".($tuition - $scholarship) ."</p>";


?>
</body>
</html>