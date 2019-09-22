<?php

$numParagraphs = $_POST['paragraphs'];
$text = $_POST['text'];

$textExplode = explode(' ', $text);

shuffle($textExplode);


//Use the implode function to turn it back into a string
$textImplode = implode(' ', $textExplode);


for($i = 0; $i < $numParagraphs; $i++) {
    //Output a parapgraph
    echo "<p>$textImplode</p>";
}



?>