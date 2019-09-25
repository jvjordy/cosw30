<!doctype html>
<html>
    <head>
        <title>Quote</title>
        <meta charset="utf-8">
      
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
            echo "<h3>Your quote in alphabetical order is </h3>";
            for($x = 0; $x < $quoteLength; $x++) {
                echo $quoteExplode[$x];
                echo "<br>";
            }
            
            rsort($quoteExplode);
            echo "<h3>Your quote in reversed alphabetical order is </h3>";
            for($x = 0; $x < $quoteLength; $x++) {
                echo $quoteExplode[$x];
                echo "<br>";
            }
            
            array_push($quoteExplode,"watermelon","strawberry","avocado");
            echo "<h3>Your quote with some words added </h3>";
             $quoteLength = count($quoteExplode);
            for($x = 0; $x < $quoteLength; $x++) {
                echo $quoteExplode[$x]. "<br><br>";
            }
            
           echo "Total words: ".$quoteLength;
                
            $quoteExplode = array_slice($quoteExplode,3);
            echo "<h3>Your quote with the first 3 words deleted </h3>";
            
             $quoteLength = count($quoteExplode);
            for($x = 0; $x < $quoteLength; $x++) {
                echo $quoteExplode[$x]. "<br><br>";
            }
            echo "Total words: ".$quoteLength;
            
            echo "<p><a href='quote.html'><button>Return to form</button></a></p>";
            
            
            
            ?>
            
        </body>
        </html>