<!doctype html>
<html>
    <head>
        <title>Population</title>
        <meta charset="utf-8">
        <style>
        th {
            text-align: center;
        }
        
    th, td {
   padding: 15px;
}

    table, td {
        border: 1px solid black;
    }
        </style>
        </head>
        
        <body>

<?php
$populous = array("New York, New York"=>8622698, 
    "Los Angeles, California"=>3999759, "Chicago, Illinois"=>2716450,
    "Houston, Texas"=>2312717, "Phoenix, Arizona"=>1626078, 
    "Philadelphia, Pennsylvania"=>1580863, "San Antonio, Texas"=>1511946,
    "San Diego, California"=>1419516, "Dallas, Texas"=>1341075,
    "San Jose, California"=>1035317, "Austin, Texas"=>950715, 
    "Jacksonville, Florida"=>892062, "San Francisco"=>884363, 
    "Columbus"=>879170, "Fort Worth"=>874168);
   
  $rank = "1";
   
   //numeric sort
echo "<table><th>The 15 Most Populous Cities as of July 1, 2017</th>";
echo "<tr><td>Rank</td>" . "<td>City, State</td>" . "<td>2017 Total Population</td></tr>";

arsort($populous);
foreach($populous as $location => $population) {
    echo "<tr><td>" . $rank++ . "</td>" . "<td>" . $location . "</td>" ."<td>" . $population . "</td></tr>";
}

echo "</table><br><br>";
   
   $rank2 = "1";
   
   //alphabetical sort
   echo "<table><th>The 15 Most Populous Cities as of July 1, 2017</th>";
   echo "<tr><td>Rank</td>" . "<td>City, State</td>" . "<td>2017 Total Population</td></tr>";
   
ksort($populous);
foreach($populous as $location => $population) {
   echo "<tr><td>" . $rank2++ . "</td>" . "<td>" . $location . "</td>" ."<td>" . $population . "</td></tr>";
}

echo "</table>";


  echo "<p><a href='quote.html'><button>Return to quote form</button></a></p>";

?>

</body>
</html>
