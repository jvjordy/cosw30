<!doctype html>
<html>
    <head>
        <title>Quote</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lora&display=swap" rel="stylesheet">
        <style>
        
        </style>
        </head>
        
        <body>
            
            <?php
            $quote = $_POST['quote_string'];
            
             
    
            
            if (str_word_count($quote) >= "5") {
                echo "<p>Thank you for your input. Your quote is: ".$quote.".</p>";
                
            }
            else {
                echo "<p>Please enter 5 or more words.</p>";
                echo "<p><a href='quote.html'><button>Try Again!</button></a></p>";
            }
            
            $quoteExplode = (explode(" ",$quote));
            $quoteImplode = implode("<ul></ul>", $quoteExplode);
            $quoteLength = count($quoteExplode);
            
            echo "<p> Amount of words: ".$quoteLength."<br><br>" .$quoteImplode. "</p>";
            
            sort($quoteExplode);
            echo "<p>Your quote in alphabetical order </p>";
            for($x = 0; $x < $quoteLength; $x++) {
                echo $quoteExplode[$x];
                echo "<br>";
            }
            
            
            
            
            ?>
            
        </body>
        </html>