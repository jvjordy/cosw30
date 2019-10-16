<?php

 function add($x, $y) {
 return ($x + $y);
 }
 
 function subtract($x, $y) {
     return ($x - $y);
 }
 
 function multiply($x, $y) {
     return ($x * $y);
 }
 
 function divide($x, $y) {
     return ($x /= $y);
 }
 
 $value1 = $_POST['number1'];
 $value2 = $_POST['number2'];
 $operator = $_POST['operator'];
 
?>

<html>
 <title>Function Machine</title>
 <head>
     <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
     
     <style>
     #container {
         background-color: #f3f3f3;
         display: inline-block;
         border-radius: 5px;
         padding: 20px;
         font-family: 'Roboto', sans-serif;
     }
     body {
         margin-top: 5%;
         text-align: center;
     }
             
         h2 {
             margin-top: 0;
         }

     </style>
 </head>
 <body>
     <div id = "container">
     <h1>Simple Calculator</h1>
     
 <form action="functionmachine.php" method="post">
     
   <p>  <label for="input1">Enter the first number:</label>
 <input type="number" name="number1" autofocus required /></p>
 
    <p><label for="input2">Enter the second number:</label>
 <input type="number" name="number2" required /></p>
 
 <p><label for="input3">Choose an operator:</label>
 <select name="operator">
  <option value="add">Add</option>
  <option value="subtract">Subtract</option>
  <option value="multiply">Multiply</option>
  <option value="divide">Divide</option>
</select> </p>
 
 <p><input type="submit" value="Calculate!"/></p>
 
 </form>
 
  <?php
 
 switch ($operator) {
    case add:
        echo "<h2>" . $value1 . " + " . $value2 . " = " . add($value1, $value2). "</h2>";
        break;
        case subtract:
            echo "<h2>" . $value1 . " - " . $value2 . " = " . subtract($value1, $value2). "</h2>";
        break;
        case multiply:
            echo "<h2>" . $value1 . " x " . $value2 . " = " . multiply($value1, $value2). "</h2>";
        break;
        case divide:
            echo "<h2>" . $value1 . " / " . $value2 . " = " . divide($value1, $value2). "</h2>";
        break;
 }
 ?>
 <p><a href='functionmachine.php'><button>Try again</button></a></p>
 </div>

 </body>
</html>