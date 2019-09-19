<?php

$numParagraphs = $_POST['paragraphs'];
$text = $_POST['text'];

$textExplode = explode(' ', $text);

shuffle($textExplode);


//Use the implode function to turn it back intor a string
$textImplode = implode(' ', $textExplode);


for($i = 0; $i < $numParagraphs; $i++) {
    //Output a parapgraph
    echo "<p>$textImplode</p>";
}



/*


$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

foreach()
while()
*/

?>